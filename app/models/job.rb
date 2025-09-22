class Job < ApplicationRecord
  belongs_to :user
  
  validates :company_name, presence: true
  validates :job_title, presence: true
  validates :location, presence: true
  
  # Set default values for boolean fields
  after_initialize :set_defaults, if: :new_record?
  
  scope :completed, -> { where(got_job: true) }
  scope :in_progress, -> { where(got_job: false) }
  
  def completion_percentage
    total_stages = 6
    completed_stages = [
      application_sent,
      cv_resume, 
      interview_secured,
      interview_attended,
      references_checked,
      got_job
    ].count(true)
    
    (completed_stages.to_f / total_stages * 100).round(1)
  end
  
  def current_stage
    return "Got the Job!" if got_job
    return "References" if references_checked
    return "Interview Attended" if interview_attended  
    return "Interview Secured" if interview_secured
    return "CV/Resume" if cv_resume
    return "Application Sent" if application_sent
    "Not Started"
  end
  
  private
  
  def set_defaults
    self.application_sent ||= false
    self.cv_resume ||= false
    self.interview_secured ||= false
    self.interview_attended ||= false
    self.references_checked ||= false
    self.got_job ||= false
  end
end
