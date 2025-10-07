class WelcomeController < ApplicationController
  # Skip the application layout for login/register views
  layout false, only: [:index, :login]

  def index
    # Registration screen - main entry point for the application
    @website_title = "Jobs Pathway"
    @website_description = "Keep track of your way to your professional life"
  end

  def login
    # Login screen
  end

  def register
    # Handle registration (placeholder for now)
    # TODO: Implement user registration logic
    redirect_to root_path, notice: "Registration functionality coming soon!"
  end

  def authenticate
    # Handle login (placeholder for now)
    # TODO: Implement authentication logic
    redirect_to root_path, notice: "Login functionality coming soon!"
  end
end