


using ConsoleApp1.BanqueWS;

internal class Program
{
    public static void Main(string[] args)
    {

        BanqueService proxy = new BanqueServiceClient();
        var result = proxy.convert(new convertRequest(25));
       Console.WriteLine(result.@return); 


    }
}
