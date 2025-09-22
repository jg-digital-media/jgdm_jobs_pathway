class User < ApplicationRecord
  has_secure_password
  
  has_many :jobs, dependent: :destroy
  
  validates :username, presence: true, length: { minimum: 3 }, uniqueness: true
  validates :email, presence: true, format: { with: URI::MailTo::EMAIL_REGEXP }, uniqueness: true
  validates :password, length: { minimum: 6 }, if: -> { new_record? || !password.nil? }
end
