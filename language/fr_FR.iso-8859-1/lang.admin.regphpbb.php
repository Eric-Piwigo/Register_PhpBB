<?php
// +-----------------------------------------------------------------------+
// | PhpWebGallery - a PHP based picture gallery                           |
// | Copyright (C) 2002-2003 Pierrick LE GALL - pierrick@phpwebgallery.net |
// | Copyright (C) 2003-2007 PhpWebGallery Team - http://phpwebgallery.net |
// +-----------------------------------------------------------------------+
//$lang_info['language_name'] = 'Fran�ais';
//$lang_info['country'] = 'France';
//$lang_info['charset'] = 'iso-8859-1';
//$lang_info['direction'] = 'ltr';
//$lang_info['code'] = 'fr';
global $lang;
$lang['Title'] = 'Register PhpBB';
$lang['Howto'] = 'Ce plugin permet d\'enregistrer automatiquement un utilisateur, s\'inscrivant sur PWG, dans un forum PhpBB. Il est bas� sur le Mod Register_PhpBB r�alis� par Flipflip que je remercie, ici, d\'avoir initialis� le projet. Remerciement sp�cial � Rub (PWG Team) pour son aide pr�cieuse.';
$lang['Install_Disclaimer']='Attention ! Apr�s l\'activation compl�te de ce plugin, toutes les manipulations d\'administration des utilisateurs (ajout manuel, suppression, modification) des deux scripts (PWG et PhpBB) devront �tre r�alis�es � travers l\'interface d\'administration de PWG. Il est conseill� de d�sactiver l\'inscription de PhpBB mais ce n\'est pas obligatoire. Les deux scripts peuvent continuer � fonctionner ind�pendemment mais les utilisateurs s\'inscivant sur le forum n\'auront pas de compte valide pour acc�der � votre galerie. Au contraire, un utilisateur qui s\'inscrit sur la galerie devient automatiquement membre du forum... C\'est le but avou� de ce plugin ;-)';
$lang['Update']='Proc�dure pour mise � jour';
$lang['Update_Disclaimer']='<u>Uniquement pour ceux qui utilisaient la version Mod de ce plugin</u>, voici les �tapes pour mettre � jour :<br/><ol><li>Supprimez tout le code ajout� au source de PWG (se reporter au fichier d\'install accompagnant le Mod) afin de revenir � une situation avant application du Mod.</li><li>Supprimez la table PLUGIN_REGISTER_PHPBB_ID_USER de la base de donn�e. Cette table est cr��e par l\'installation du plugin, doit �tre vide et ne sera pas utilis�e.</li><li>Renommez la table MOD_REGISTER_PHPBB_ID_USER en PLUGIN_REGISTER_PHPBB_ID_USER</li><li>V�rifiez, corrigez et activez les param�tres de comportement du plugin => <u>Rendez vous � l\'�tape 1 - NE FAITES PAS LA MIGRATION DE l\'ETAPE 2 !</u></li><li>La resynchronisation est optionnelle. Elle remettra � plat la table de correspondance.</li></ol>';
$lang['Install_Disclaimer2']='Dans un premier temps, il faut configurer les param�tres de fonctionnement du plugin vis � vis de PhpBB puis copier les comptes utilisateurs pr�sents dans PWG vers PhpBB. Une troisi�me fonction est disponible afin de resynchroniser les tables dans le cas o� un ajout ou une suppression d\'utilisateur s\'est mal d�roul�e. Mais vous ne devriez pas avoir � l\'utiliser.<br/><br/>A l\'issue des 2 �tapes principales, le plugin sera pleinement fonctionnel et vous n\'aurez plus � revenir sur cette page.';
$lang['Step1_Title'] = 'Etape 1 : Configuration du plugin';
$lang['Step1_Disclaimer'] = 'V�rifiez les param�tres relatifs � votre installation de PhpBB et corrigez les au besoin. Modifiez, le cas �ch�ant, le comportement du plugin � votre convenance. Enfin, n\'oubliez pas de passer l\'activation du plugin � 1 avant d\'enregistrer vos param�tres !';
$lang['PluginActivation']='Activer ou D�sactiver l\'enregistrement dans PhpBB<br/>
0 --&gt; D�sactiv� (pas d\'ajout automatique des utilisateurs dans PhpBB)<br/>
1 --&gt; Activ�<br/>';
$lang['Phpbb_Prefix']='Pr�fixe des tables de PhpBB :';
$lang['Phpbb_Admin']='Nom d\'utilisateur de l\'administrateur de PWG. <b><u>Doit �tre identique � celui de PhpBB</u></b> :';
$lang['Phpbb_Timezone']='Zone de temps (de -12 � 14) :';
$lang['Phpbb_Language']='Langue (French, English) :';
$lang['Phpbb_Style']='Id du style du forum (1 par d�faut) :';
$lang['Phpbb_Del_Pt']='Suppression des topics et posts de l\'utilisateur lorsqu\'il est supprim�.<br/>
0 --&gt; Supprimer tout<br/>
1 --&gt; Ne supprime pas les posts et les topics<br/>';
$lang['Step2_Btn']='Migration';
$lang['Step2_Title']='Etape 2 : Migration des comptes PWG vers PhpBB / Resynchronisation des comptes';
$lang['Step2_Text']='Deux cas de figure se pr�sentent ici : <br/><br/><u>1) Vous n\'avez jamais utilis� le Mod Register_PhpBB et encore moins le plugin du m�me nom</u> -> Dans ce cas, votre table #_users de PhpBB doit �tre vide de tout compte. Vous pouvez alors cliquez <b>UNE FOIS</b> sur le bouton "Migration". Si des erreurs se produisent pendant l\'op�ration, videz les tables [PhpBB]_users et [PWG]_plugin_register_PhpBB_id_user (via PhpMyAdmin par exemple), corrigez la cause du probl�me et recommencez l\'op�ration de migration (� ce moment l� seulement vous pouvez recliquer sur le bouton "Migration").';
$lang['Step22_Text']='<b>NE JAMAIS EFFECTUER CETTE OPERATION PLUS D\'UNE FOIS DE SUITE</b> !';
$lang['Step3_Btn']='Resynch';
$lang['Step3_Text']='<u>2) Vous avez d�j� utilis� le Mod / plugin (mise � jour d\'une version pr�c�dentes de PWG vers l\'actuelle)</u> -> Ceci signifie que vous disposez d�j� d\'une table de correspondance des Id entre PWG et PhpBB. Le script de re synchronisation d�tectera les donn�es pr�sentes en comparant les noms des utilisateurs et leur adresse email dans les deux tables #_users (PWG et PhpBB) et mettra � jour cette table de correspondance. A l\'issue de l\'op�ration, veuillez v�rifier la pr�sence de doublons �ventuels dans les utilisateurs de PhpBB. Si cela est le cas, il faut supprimer les plus anciens (tri des utilisateurs PhpBB selon leur date d\'incription).<br/><br/>';
?>
