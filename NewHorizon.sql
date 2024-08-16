29.Realiza una función con PL/SQL que retorne la cantidad de pacientes que ingresaron a la clínica 
durante el año 2014 y cuya edad al momento del ingreso no sea mayor a 15 años.


CREATE OR REPLACE FUNCTION listar_pacientes_menores_2014()
RETURNS TABLE (
    tipo_id_paciente VARCHAR,
    paciente_id VARCHAR,
    nombre_paciente TEXT,
    fecha_nacimiento DATE,
    fecha_ingreso DATE
) AS $$
BEGIN
    RETURN QUERY
    SELECT 
        p.tipo_id_paciente,
        p.paciente_id,
        p.primer_nombre || ' ' || p.segundo_nombre AS nombre_paciente,
        p.fecha_nacimiento,
        i.fecha_ingreso::DATE  -- Convertimos a DATE
    FROM ingresos i
    JOIN pacientes p 
    ON i.tipo_id_paciente = p.tipo_id_paciente AND i.paciente_id = p.paciente_id
    WHERE i.fecha_ingreso BETWEEN '2014-01-01' AND '2014-12-31'
    AND EXTRACT(YEAR FROM AGE(i.fecha_ingreso, p.fecha_nacimiento)) <= 15;
END;
$$ LANGUAGE plpgsql;

--SELECT * FROM listar_pacientes_menores_2014()


--SOLO CONTEO
CREATE OR REPLACE FUNCTION contar_pacientes_menores_2014()
RETURNS INTEGER AS $$
DECLARE
    v_cantidad_pacientes INTEGER;
BEGIN
    SELECT COUNT(*)
    INTO v_cantidad_pacientes
    FROM ingresos i
    JOIN pacientes p 
    ON i.tipo_id_paciente = p.tipo_id_paciente AND i.paciente_id = p.paciente_id
    WHERE i.fecha_ingreso BETWEEN '2014-01-01' AND '2014-12-31'
    AND EXTRACT(YEAR FROM AGE(i.fecha_ingreso, p.fecha_nacimiento)) <= 15;

    RETURN v_cantidad_pacientes;
END;
$$ LANGUAGE plpgsql;

--SELECT contar_pacientes_menores_2014();

30.Realiza un procedimiento con PL/SQL que retorne la siguiente información: Ingreso, fecha_ingreso, 
Identificación del paciente, Nombre completo del paciente; donde la fecha de ingreso corresponda al mes de 
septiembre del año 2014. El procedimiento debe recibir variables fecha1 y fecha2.

CREATE OR REPLACE FUNCTION obtener_pacientes_por_fecha(fecha1 DATE, fecha2 DATE)
RETURNS TABLE (
    ingreso INTEGER,
    fecha_ingreso DATE,
    tipo_id_paciente VARCHAR,
    paciente_id VARCHAR,
    nombre_completo TEXT
) 
LANGUAGE plpgsql
AS $$
BEGIN
    RETURN QUERY
    SELECT 
        i.ingreso,
        i.fecha_ingreso::DATE,  -- Convertimos a DATE
        p.tipo_id_paciente,
        p.paciente_id,
        p.primer_nombre || ' ' || COALESCE(p.segundo_nombre || ' ', '') || p.primer_apellido || ' ' || p.segundo_apellido AS nombre_completo
    FROM
        ingresos i
    JOIN 
        pacientes p 
    ON 
        i.tipo_id_paciente = p.tipo_id_paciente AND i.paciente_id = p.paciente_id
    WHERE
        i.fecha_ingreso::DATE BETWEEN fecha1 AND fecha2;
END;
$$;

--SELECT * FROM obtener_pacientes_por_fecha ('2014-08-01','2014-08-31');