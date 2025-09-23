class WelcomeController < ApplicationController
  def index
    # Simple controller action that doesn't need database
    @message = "🎉 Rails 8.0 is running successfully!"
    @status = "Your Jobs Pathway application is ready for development"
  end
end