package servlet;

// Import required java libraries
import java.io.*;
import javax.servlet.*;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

// Extend HttpServlet class
@WebServlet("/HelloWorld")
public class HelloWorld extends HttpServlet {
 
    
    @Override
    public void doGet(HttpServletRequest request, HttpServletResponse response)
	throws ServletException, IOException {
	response.setContentType("text/html");
	PrintWriter writer = response.getWriter();
	writer.println("<!DOCTYPE><html><head><title>Welcome Servlet</title></head>");
	writer.println("<body><h3>Welcome to the world of servlet!</h3></body></html>");
	
    }
}
