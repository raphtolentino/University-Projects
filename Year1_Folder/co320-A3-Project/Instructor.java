/**
 * The Instructor class represents instructors of the club 
 * It holds relevant details of an instructor.
 * 
 * @author Yang He
 * @version Oct 2019
 */
public class Instructor
{
    private String sid;
    private String name;
    private String gender;

    /**
     * Create a new instructor with a given ID, name and gender.
     * 
     * @param  sid     Instructor id
     * @param  name    Instructor name
     * @param  isMale  Instructor's gender
     */
    public Instructor(String sid, String name, String gender)
    {
        this.sid = sid;
        this.name = name; 
        this.gender = gender;
    }
    
    /**
     * Print the details of the instructor
     */
    public void print()
    {
        System.out.println("Instructor " + sid + ": " + name  + " (" + gender + ")");
    }
}
