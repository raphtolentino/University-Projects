/**
 * The Activity class represents fitness activities run in the club
 * It holds relevant details of an activity.
 * 
 * @author Yang He
 * @version Oct 2019
 */
public class Activity
{ 
    // Title of the activity
    private String title;

    // Day of the week 
    private String day; 

    // Instructor of the activity
    private Instructor instructor;

    // Total number of members registered on the activity
    private int size;

    /**
     * Create a new activity with a given ID, title and instructor.
     * 
     * @param  title  Activity title
     * @param  day    Day of the week when the activity is on	 
     * @param  instructor   An object of Instructor
     */
    public Activity(String title, String day, Instructor instructor)
    {
        this.title = title;
        this.day = day;
        this.instructor = instructor;
        size = 0;  // Default 
    }

    /**
     * Get the activity title.
     * 
     * @return  The activity title.
     */
    public String getTitle()
    {
        return title;
    }

    /**
     * Get the day when the activity is
     * 
     * @return The day when the activity is
     */
    public String getDayOfWeek()
    {
        return day;
    }

    /**
     * Get the activity instructor
     * 
     * @return  The activity instructor
     */
    public Instructor getInstructor()
    {
        return instructor;
    }

    /**
     * Set a new instructor for this activity.
     * 
     * @param instructor  An object of Instructor
     */
    public void setInstructor(Instructor instructor)
    {
        this.instructor = instructor;
    }

    /**
     * Get the total number of members on the activity
     * 
     * @return  The number of members on the activity
     */
    public int getSize()
    {
        return size;
    }

    /**
     * Set the number of members on the activity.
     * 
     * @param  number  Number of members on the activity.
     */
    public void setSize(int number)
    {
        size = number;
    }

    /**
     * Print the activity details to the output terminal.
     */
    public void print()
    {
        System.out.println("Activity title: " + title);
        System.out.println("Day: " + day);
        instructor.print();
        System.out.println("Total number of members: "+ size);
        System.out.println("----------------------------------");
    }
}
