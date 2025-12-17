erDiagram
    CLIENTS ||--o{ PROJECTS : "requests"
    PROJECTS ||--o{ CREDENTIALS : "uses"
    PROJECTS ||--o{ TASKS : "is_broken_down_into"
    PROJECTS ||--o{ INVOICES : "generates"
    PROJECTS ||--o{ ACTIVITY_LOGS : "has_history"
    PROJECTS ||--o{ TIME_ENTRIES : "tracks_time"
    TASKS |o--o{ TIME_ENTRIES : "specific_work_log"

    CLIENTS {
        bigint id PK
        string name
        string email
        string platform "Fiverr/Upwork"
        string platform_username
        text notes
    }

    PROJECTS {
        bigint id PK
        bigint client_id FK
        string name
        enum status "pending, active, completed"
        date deadline
        decimal budget_amount
        boolean is_hourly
        string repository_url
    }

    CREDENTIALS {
        bigint id PK
        bigint project_id FK
        string type "FTP, SSH, DB, WP_Admin"
        string host
        string username
        text encrypted_password
        boolean is_tested
    }

    TASKS {
        bigint id PK
        bigint project_id FK
        string title
        text details
        enum priority "low, med, high"
        enum status "todo, doing, done"
    }

    TIME_ENTRIES {
        bigint id PK
        bigint project_id FK
        bigint task_id FK "nullable"
        datetime start_time
        datetime end_time
        int duration_minutes
    }

    INVOICES {
        bigint id PK
        bigint project_id FK
        string invoice_number
        decimal amount_gross
        decimal platform_fee
        decimal amount_net
        enum status "draft, sent, paid"
    }

    ACTIVITY_LOGS {
        bigint id PK
        bigint project_id FK
        string action_type
        text description
        timestamp created_at
    }
