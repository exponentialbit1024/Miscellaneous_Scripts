import facebook

a_t = "EAARG1oYRhI8BAH7Gj2gjoa7OO9g4N0ZCkJ0ZCRpaL8eCAeYhvma7gx8muiV7vhgNQ3kuED8ARgz6G8sGBtKtKChG6vP8nXq5aTLZACiDsrxx8uDxlAuy7gjzhIjkCuXDBUCfiUNHqCjZBZALHaPU27T4rEmm6csyT1UTQ1iZAttd2NdF6yyxuHv7sMZBVtFCBQZD"
graph = facebook.GraphAPI(access_token = a_t, version="2.7")

events = graph.search(type="events", q="Dubai")

for event in event['data']:
    print event['description']
