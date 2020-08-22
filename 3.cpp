#include <iostream>
using namespace std;
 
void cetak_gambar(int n){
    int i,j;
    for(i=1; i<=n; i++){
        if(i%2 == 1){
            for(j=1; j<=n; j++){
                if(j%2 == 1) cout<<'=';
                else cout<<" * ";
            }
        }
 
        else{
            for(j=1; j<=n; j++){
                if(j%2 == 1) cout<<'*';
                else cout<<" = ";
            }
        }
        cout<<endl;
    }
}
 
int main(){
    int a;
    cin>>a;
    if(a%2 == 1) cetak_gambar(a);
    else cout<<"Mohon masukkan bilangan ganjil"<<endl;
    return 0;
}
