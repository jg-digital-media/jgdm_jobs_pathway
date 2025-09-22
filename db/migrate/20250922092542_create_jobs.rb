class CreateJobs < ActiveRecord::Migration[8.0]
  def change
    create_table :jobs do |t|
      t.references :user, null: false, foreign_key: true
      t.string :company_name, null: false
      t.string :job_title, null: false
      t.string :salary
      t.string :location, null: false
      t.string :contact_person
      t.string :contact_email
      t.text :description
      t.boolean :application_sent, default: false, null: false
      t.boolean :cv_resume, default: false, null: false
      t.boolean :interview_secured, default: false, null: false
      t.boolean :interview_attended, default: false, null: false
      t.boolean :references_checked, default: false, null: false
      t.boolean :got_job, default: false, null: false

      t.timestamps
    end
    
    add_index :jobs, :user_id
    add_index :jobs, :got_job
  end
end
