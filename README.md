# Weather - API

# Objetivo

Desenvolver uma API REST para a consulta de temperaturas em cidades por meio de uma API externa e sugerir músicas baseadas nas temperaturas.

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
    `404 (Requisição inválida)` | `Infome de qual cidade deseja saber a temperatura.`

