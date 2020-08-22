#include <iostream>
#include <string>
using namespace std;
 
string encrypt(string s){
	for(int i=0; i<s.length(); i++){
  		if(islower(s[i])) s[i] -= 36;
  		else if(isupper(s[i])) s[i] += 36;
  		else s[i] += 1;
	}
	return s;
}
 
string decrypt(string s){
	for(int i=0; i<s.length(); i++){
		if((int)s[i] >= 101 && (int)s[i] <= 126) s[i] -= 36;
		else if ((int)s[i] >= 61 && (int)s[i] <= 86) s[i] += 36;
		else s[i] -= 1;
	}
	return s;
}
 
int main(){
	cout<<encrypt("Lucinta");
	cout<<endl;
	cout<<decrypt("pQ?EJP=");
	return 0;
}
