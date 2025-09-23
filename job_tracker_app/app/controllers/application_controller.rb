class ApplicationController < ActionController::Base
  # Only allow modern browsers supporting webp images, web push, badges, import maps, CSS nesting, and CSS :has.
  allow_browser versions: :modern
  
  # Temporary method to show Rails is working
  def hello
    render html: "<h1>🎉 Rails 8.0 is Working!</h1><p>Your Jobs Pathway application is ready for development.</p><p><a href='/welcome/index'>Go to Welcome Page</a></p>".html_safe
  end
end