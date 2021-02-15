# Weather - API

# Objetivo

Desenvolver uma API REST para a consulta de temperaturas em cidades por meio de uma API externa e sugerir playlists baseadas nas temperaturas.

- Relação de Temperaturas 

    Temperatura | Estilo Musical
    ------------ | -------------
    `Acima de 30°C` | `Musicas para Festa`
    `Entre 15°C e 30°C` | `Pop`
    `Entre 10°C e 14°C` | `Rock`
    `Abaixo de 10°C` | `Musica Classica`


1. Rota Única

    - Request

        ```bash
        GET http://localhost:8080/v1/api/wheathers
        ```
    - Body

        ```json
        {
            "city": "Feira de Santana" 
        }
        ```

- Retornos Possíveis

    Código | Resposta
    ------------ | -------------
    `200 (OK)` | {}
    `404 (Requisição inválida)` | `Informe de qual cidade deseja saber a temperatura.`

