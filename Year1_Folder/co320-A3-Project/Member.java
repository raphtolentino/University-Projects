/**
 * The Member class represents a member at a local club.
 * It holds relevant details of a member.
 * 
 * @author   Your name and login
 * @version  Date when it's last updated
 */
public class Member
{
    private String mid;       // the member's ID  
    private String name;      // the member's name  
    private boolean isMale;   // the member's gender

    // List of the activities taken by the member, e.g. Yoga|Pilates|Boxing| 
    private String activities;   
    
    
    /**
     * Create a new member with a given ID, name and gender info. 
     * 
     * @param  mid     A member ID
     * @param  name    A member name
     * @param  isMale  A member is male or not
     */
    public Member(String mid, String name,  boolean isMale)
    {       
         this.mid= mid;
        this.name = name;
        this.isMale = isMale;
        activities = "";  // default is empty      
    }

    /**
     * Get the member ID of this member
     * 
     * @return the member ID of this member.
     */
    public String getMID()
    {
        return mid;
    }
    
    /**
     * Get  the name of this member.
     * 
     * @return  the name of this member.
     */
    public String getName()
    {
        return name;
    }

    /**
     * Set a new name for this member.
     * 
     * @param name  A new name for this member
     */
    public void setName(String name)
    {
        // To be implemented
      
    }
        
    /**
     * Get the gender of the member, i.e. "Male" or "Female"
     * 
     * @return The String "Male" if the member is male, 
     *         otherwise "Female".
     */
    public String getGender()
    {
        // To be implemented   
      
    }
        
    /**
     * Print the member's details, 
     * i.e. id, name, gender and a list of activities,
     * to the output terminal. 
     */
    public void print()
    {
        // To be implemented 
 
    }
     
}
