### **Take-Home Assignment**  

**Objective:** Implement a Laravel system where users belong to an **Organization**, and each member has a **Wallet** that follows configurable rules. Each user's wallet resets based on their **join date + organization's reset interval**.

---

### **Tasks**  

#### **1. Database Schema Design**  
- `organizations` table:  
  - `id` (Primary Key)  
  - `name` (string)  
  - `reset_interval_days` (integer) – Number of days after which a user’s wallet should reset  
  - `created_at`, `updated_at`  

- `users` table:  
  - `id` (Primary Key)  
  - `name` (string)  
  - `email` (unique)  
  - `organization_id` (nullable, Foreign Key to `organizations`)  
  - `joined_at` (timestamp) – When the user joined the organization  

- `wallets` table:  
  - `id` (Primary Key)  
  - `user_id` (Foreign Key to `users`)  
  - `balance` (decimal)  
  - `last_reset_at` (timestamp, nullable) – Tracks when the wallet was last reset  

✅ **Deliverable:** Laravel migration files & Eloquent models with relationships.  

---

#### **2. Implement Eloquent Relationships**  
- **An Organization has many Users**  
- **A User belongs to one Organization**  
- **A User has one Wallet**  
- **An Organization has a reset interval that applies individually to each user**  

✅ **Deliverable:** Laravel Eloquent models with proper relationships (`hasMany`, `belongsTo`).  

---

#### **3. Wallet Creation & Assignment**  
- Implement an **event/listener** that:  
  - Creates a **Wallet** when a User joins an Organization.  
  - Sets `last_reset_at = now()` upon creation.  

✅ **Deliverable:** Laravel event listener (`UserObserver` or `UserRegistered` event).  

---

#### **4. Implement Wallet Reset Logic (Per User Reset Interval via Cron Job)**  
- Create an Artisan command (`php artisan wallet:reset`) that:  
  - **Checks each user’s last reset date.**  
  - If **`last_reset_at + organization.reset_interval_days`** has passed, reset the wallet.  
  - Updates `last_reset_at = now()` after reset.  

✅ **Deliverable:** Laravel Artisan command + scheduled task in `app/Console/Kernel.php`.  

---

#### **5. API Endpoints (Bonus)**  
- `POST /organizations` → Create a new organization.  
- `POST /users` → Add a user (assign wallet if necessary).  
- `GET /users/{id}/wallet` → Retrieve a user's wallet balance.  
- `PUT /organizations/{id}/rules` → Update wallet reset interval.  

✅ **Deliverable:** Laravel API routes & controllers (with validation/authentication).  

---

### **Evaluation Criteria**  
- **Database design** (handles individual user resets).  
- **Event-driven approach** (wallet creation, reset tracking).  
- **Laravel best practices** (Eloquent, Observers, Cron Jobs, API design).  
- **Performance** (scales well with many users).  

Would you like sample logic for the **cron job implementation**? 🚀
