
import  java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] arrays = {11,13,12,14,15,16};
        sorting(arrays);
        System.out.println(Arrays.toString(arrays));
        System.out.print("Masukan data (11 - 16) = ");
        int i = input.nextInt();
        int index = interpolasi(arrays,0, arrays.length-1,i );

        if (index != -1)
            System.out.println("Data Ditemukan index ke - "
                    + index);
        else
            System.out.println("Data tidak ada");

    }

    public static int interpolasi(int[] data ,int awal,int akhir,int cari) {            //Bayu Krisna
        int posisi;


        if (awal<= akhir &&cari >= data[awal] && cari <= data[akhir]){
            posisi =awal + (((akhir - awal) / (data[akhir] - data[awal])) * (cari- data[awal]));

            if(cari == data[posisi])
                return posisi;

            if(cari < data[posisi])
                return interpolasi(data,awal,posisi-1,cari);

            if(cari > data[posisi])
                 return interpolasi(data,posisi+1,akhir,cari);
        }

        return -1;

    }

    public static void sorting(int[] arr) {
        int n = arr.length;
        int temp = 0;
        for (int i = 0; i < n; i++) {
            for (int j = 1; j < (n - i); j++) {
                if (arr[j - 1] > arr[j]) {

                    temp = arr[j - 1];
                    arr[j - 1] = arr[j];
                    arr[j] = temp;
                }

            }
        }
    }
}