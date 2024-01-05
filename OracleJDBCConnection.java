import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class OracleJDBCConnection {

    public static void main(String[] args) {
        // Replace the below variables with your actual database credentials
        String username = "aayushraj";
        String password = "Aayush@4774";
        String url = "jdbc:oracle:thin:@/localhost:1521/xe";

        // Establishing the connection
        try {
            Class.forName("oracle.jdbc.driver.OracleDriver"); // Load the Oracle JDBC driver
            Connection connection = DriverManager.getConnection(url, username, password);
            
            if (connection != null) {
                System.out.println("Connected to Oracle database successfully!");
                // Use the connection here for executing queries or other database operations.
                // Remember to close the connection when you are done.
                connection.close();
            }+
        } catch (ClassNotFoundException e) {
            System.err.println("Error: Oracle JDBC driver not found.");
            e.printStackTrace();
        } catch (SQLException e) {
            System.err.println("Error: Unable to connect to the Oracle database.");
            e.printStackTrace();
        }
    }
}
