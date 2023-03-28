## BankAccounts App

### How to run GraphQL Endpoint
- Use the GraphQL Playground to query Eg: `http://localhost:9400/graphql-playground`
- For querying a specific Account
    - use Account field in the GraphQL query as below
    ```
    account(accountid: 1)
    {
        accountid
        accountnumber
    }
    ```
- For querying all Accounts
    -  use Accounts field in the GraphQL query as below
    ```
    {
        accounts(first: 5) {
            data {
                accountid
                accountnumber
            }
        }
    }
    ```
    - you can also try paginating, as below
    ```
    {
        accounts(first: 2, page: 2) {
            data {
                accountid
                accountnumber
                created_on
                last_login
            }
            paginatorInfo {
                total
                currentPage
                perPage
            }
        }
    }
    ```
