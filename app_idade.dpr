program app_idade;

uses
  System.StartUpCopy,
  FMX.Forms,
  u_idade in '..\u_idade.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
