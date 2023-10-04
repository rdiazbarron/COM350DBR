import pandas as pd

file_path = 'ciudadanos.csv'
data_pd = pd.read_csv(file_path)
print(data_pd)

def is_only_alpha(s):
    return str(s).isalpha()

mask = data_pd[['nombre1', 'nombre2', 'paterno', 'materno']].applymap(is_only_alpha).all(axis=1)
df_filtered = data_pd[mask]

def is_only_numeric(s):
    return str(s).isnumeric()

mask = df_filtered['ci'].apply(is_only_numeric)
df_filtered = df_filtered[mask]


def concat_columns(df, columna1, columna2, nombre_nueva_columna):
    df[columna1] = df[columna1].fillna('')
    df[columna2] = df[columna2].fillna('')

    df[nombre_nueva_columna] = df[columna1] + ' ' + df[columna2]
    df[nombre_nueva_columna] = df[nombre_nueva_columna].str.strip()

    return df
concat_columns(df_filtered, 'nombre1', 'nombre2', 'fullname2')


def convert_date(df, columna_fecha):
    df[columna_fecha] = pd.to_datetime(df[columna_fecha], dayfirst=True).dt.strftime('%Y-%m-%d')
    return df
convert_date(df_filtered,'fecha')

#DATOS LIMPIOS
print(df_filtered)