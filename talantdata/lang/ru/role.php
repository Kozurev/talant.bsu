<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'ru', branch 'MOODLE_35_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Добавить новую роль';
$string['addrole'] = 'Добавить новую роль';
$string['advancedoverride'] = 'Расширенное переопределение роли';
$string['allow'] = 'Дать право';
$string['allowassign'] = 'Разрешить назначение ролей';
$string['allowed'] = 'Разрешено';
$string['allowoverride'] = 'Разрешить переопределение ролей';
$string['allowroletoassign'] = 'Разрешить пользователям с ролью «{$a->fromrole}» назначать роль «{$a->targetrole}»';
$string['allowroletooverride'] = 'Разрешить пользователям с ролью «{$a->fromrole}» переопределять роль «{$a->targetrole}»';
$string['allowroletoswitch'] = 'Разрешить пользователям с ролью {$a->fromrole} переключаться на роль {$a->targetrole}';
$string['allowroletoview'] = 'Разрешить пользователям с ролью {$a->fromrole} просматривать роль {$a->targetrole}';
$string['allowswitch'] = 'Разрешить переключение между ролями';
$string['allowview'] = 'Разрешить просмотр роли';
$string['allsiteusers'] = 'Все пользователи сайта';
$string['analytics:listinsights'] = 'Просматривать список инсайтов';
$string['analytics:managemodels'] = 'Управлять моделями';
$string['archetype'] = 'Прототип роли';
$string['archetypecoursecreator'] = 'ПРОТОТИП: Создатель курса';
$string['archetypeeditingteacher'] = 'ПРОТОТИП: Учитель (редактирующий)';
$string['archetypefrontpage'] = 'ПРОТОТИП: Аутентифицированный пользователь на главной странице';
$string['archetypeguest'] = 'ПРОТОТИП: Гость';
$string['archetype_help'] = 'Прототип роли определяет соответствующие права, если роль сбрасывается к настройкам по умолчанию. От этого параметра также зависят новые права для роли, появляющиеся при обновлении сайта.';
$string['archetypemanager'] = 'ПРОТОТИП: Управляющий';
$string['archetypestudent'] = 'ПРОТОТИП: Студент';
$string['archetypeteacher'] = 'ПРОТОТИП: Ассистент (нередактирующий преподаватель)';
$string['archetypeuser'] = 'ПРОТОТИП: Аутентифицированный пользователь';
$string['assignanotherrole'] = 'Назначить другую роль';
$string['assignedroles'] = 'Назначенные роли';
$string['assignerror'] = 'Ошибка при назначения пользователю «{$a->user}» роли «{$a->role}».';
$string['assignglobalroles'] = 'Назначить глобальные роли';
$string['assignmentcontext'] = 'Контекст назначения';
$string['assignmentoptions'] = 'Варианты назначения';
$string['assignrole'] = 'Назначить роль';
$string['assignrolenameincontext'] = 'Назначить роль «{$a->role}» в контексте «{$a->context}»';
$string['assignroles'] = 'Назначить роли';
$string['assignroles_help'] = 'Назначая роль пользователю, Вы предоставляете ему права, данные этой роли для текущего уровня (контекста) и всех «более низких» уровней.
Например, если пользователю назначается роль студента в контексте курса, то он также будет иметь роль студента во всех элементах и блоках курса.';
$string['assignrolesin'] = 'Назначить роли в контексте «{$a}»';
$string['assignrolesrelativetothisuser'] = 'Назначить роли этому пользователю';
$string['backtoallroles'] = 'Вернуться к списку всех ролей';
$string['backup:anonymise'] = 'Обезличивать данные пользователей при резервном копировании';
$string['backup:backupactivity'] = 'Осуществлять резервное копирование элементов курса';
$string['backup:backupcourse'] = 'Осуществлять резервное копирование курсов';
$string['backup:backupsection'] = 'Осуществлять резервное копирование разделов';
$string['backup:backuptargethub'] = 'Осуществлять резервное копирование для Moodle.net';
$string['backup:backuptargetimport'] = 'Осуществлять резервное копирование для импорта';
$string['backup:configure'] = 'Настраивать параметры резервного копирования';
$string['backup:downloadfile'] = 'Скачивать файлы из области для резервных копий';
$string['backup:userinfo'] = 'Осуществлять резервное копирование данных пользователей';
$string['badges:awardbadge'] = 'Награждать пользователя значком';
$string['badges:configurecriteria'] = 'Настраивать/редактировать критерии награждения значком';
$string['badges:configuredetails'] = 'Настраивать/редактировать значки';
$string['badges:configuremessages'] = 'Настраивать сообщения для значков';
$string['badges:createbadge'] = 'Создавать/копировать значки';
$string['badges:deletebadge'] = 'Удалять значки';
$string['badges:earnbadge'] = 'Зарабатывать значки';
$string['badges:manageglobalsettings'] = 'Управлять глобальными настройками значков';
$string['badges:manageownbadges'] = 'Просматривать собственные заработанные значки и и управлять ими.';
$string['badges:revokebadge'] = 'Отменять значок пользователя';
$string['badges:viewawarded'] = 'Просматривать пользователей, награжденных конкретным значком, без возможности награждать им';
$string['badges:viewbadges'] = 'Просматривать доступные значки не заработав их';
$string['badges:viewotherbadges'] = 'Видеть значки в профилях других пользователей';
$string['block:edit'] = 'Редактировать настройки блока';
$string['block:view'] = 'Видеть блок';
$string['blog:create'] = 'Создавать записи в блоге';
$string['blog:manageentries'] = 'Редактировать записи блога и управлять ими';
$string['blog:manageexternal'] = 'Редактировать записи во внешних блогах и управлять ими';
$string['blog:search'] = 'Осуществлять поиск по записям блогов';
$string['blog:view'] = 'Просматривать записи блогов';
$string['blog:viewdrafts'] = 'Просматривать черновики записей блогов';
$string['calendar:manageentries'] = 'Управлять любыми записями в календаре';
$string['calendar:managegroupentries'] = 'Управлять записями для групп в календаре';
$string['calendar:manageownentries'] = 'Управлять своими записями календаре';
$string['capabilities'] = 'Права';
$string['capability'] = 'Право';
$string['category:create'] = 'Создавать категории';
$string['category:delete'] = 'Удалять категории';
$string['category:manage'] = 'Управлять категориями';
$string['category:update'] = 'Редактировать категории';
$string['category:viewhiddencategories'] = 'Просматривать скрытые категории';
$string['category:visibility'] = 'Просматривать скрытые категории';
$string['checkglobalpermissions'] = 'Проверить глобальные права';
$string['checkpermissions'] = 'Проверить права';
$string['checkpermissionsin'] = 'Проверка прав. {$a}';
$string['checksystempermissionsfor'] = 'Проверить глобальные права для пользователя «{$a->fullname}»';
$string['checkuserspermissionshere'] = 'Проверить права пользователя «{$a->fullname}» в этом контексте уровня «{$a->contextlevel}»';
$string['chooseroletoassign'] = 'Выберите назначаемую роль';
$string['cohort:assign'] = 'Добавлять и удалять членов глобальной группы';
$string['cohort:manage'] = 'Создавать, удалять и перемещать глобальные группы';
$string['cohort:view'] = 'Просматривать глобальные группы сайта';
$string['comment:delete'] = 'Удалять комментарии';
$string['comment:post'] = 'Размещать комментарии';
$string['comment:view'] = 'Просматривать комментарии';
$string['community:add'] = 'Использовать блок «Поиск в общественных каталогах» для поиска курсов в Moodle.net';
$string['community:download'] = 'Скачивать курсы при помощи блока «Поиск в общественных каталогах»';
$string['competency:competencygrade'] = 'Устанавливать рейтинг компетенций';
$string['competency:competencymanage'] = 'Управлять фреймворками компетенций';
$string['competency:competencyview'] = 'Просматривать фреймворки компетенций';
$string['competency:coursecompetencyconfigure'] = 'Настраивать параметры компетенций курса';
$string['competency:coursecompetencygradable'] = 'Получать оценки компетенций';
$string['competency:coursecompetencymanage'] = 'Управлять компетенциями курса';
$string['competency:coursecompetencyview'] = 'Просматривать компетенции курса';
$string['competency:evidencedelete'] = 'Удалять доказательства';
$string['competency:plancomment'] = 'Комментировать учебный план';
$string['competency:plancommentown'] = 'Комментировать свой учебный план';
$string['competency:planmanage'] = 'Управлять учебными планами';
$string['competency:planmanagedraft'] = 'Управлять черновиками учебных планов';
$string['competency:planmanageown'] = 'Управлять своими учебными планами';
$string['competency:planmanageowndraft'] = 'Управлять своими черновиками учебных планов';
$string['competency:planrequestreview'] = 'Запрашивать пересмотр учебного плана';
$string['competency:planrequestreviewown'] = 'Запрашивать пересмотр своего учебного плана';
$string['competency:planreview'] = 'Пересматривать учебный план';
$string['competency:planview'] = 'Просматривать все учебные планы';
$string['competency:planviewdraft'] = 'Просматривать черновики учебных планов';
$string['competency:planviewown'] = 'Просматривать свои учебные планы';
$string['competency:planviewowndraft'] = 'Просматривать свои черновики учебных планов';
$string['competency:templatemanage'] = 'Управлять шаблонами учебных планов';
$string['competency:templateview'] = 'Просматривать шаблоны учебных планов';
$string['competency:usercompetencycomment'] = 'Комментировать компетенции пользователя';
$string['competency:usercompetencycommentown'] = 'Комментировать свои компетенции пользователя';
$string['competency:usercompetencyrequestreview'] = 'Запрашивать пересмотр компетенций пользователя';
$string['competency:usercompetencyrequestreviewown'] = 'Запрашивать пересмотр своих компетенций пользователя';
$string['competency:usercompetencyreview'] = 'Пересматривать компетенции пользователя';
$string['competency:usercompetencyview'] = 'Просматривать компетенции пользователя';
$string['competency:userevidencemanage'] = 'Управлять доказательствами предыдущего обучения';
$string['competency:userevidencemanageown'] = 'Управлять своими доказательствами предыдущего обучения';
$string['competency:userevidenceview'] = 'Просматривать доказательства предыдущего обучения пользователя';
$string['confirmaddadmin'] = 'Вы действительно хотите добавить пользователя <strong>{$a}</strong> в список администраторов сайта?';
$string['confirmdeladmin'] = 'Вы действительно хотите удалить пользователя <strong>{$a}</strong> из списка администраторов сайта?';
$string['confirmroleprevent'] = 'Вы действительно хотите удалить роль <strong>«{$a->role}»</strong> из списка ролей, которым дано право «{$a->cap}» в контексте «{$a->context}»?';
$string['confirmroleunprohibit'] = 'Вы действительно хотите удалить <strong>«{$a->role}»</strong> из списка ролей, которые лишены права «{$a->cap}» в контексте «{$a->context}»?';
$string['confirmunassign'] = 'Вы действительно хотите отозвать эту роль у этого пользователя?';
$string['confirmunassignno'] = 'Отменить';
$string['confirmunassigntitle'] = 'Подтвердите изменение роли';
$string['confirmunassignyes'] = 'Удалить';
$string['context'] = 'Контекст';
$string['course:activityvisibility'] = 'Скрывать/показывать элементы курса';
$string['course:bulkmessaging'] = 'Отправлять сообщения нескольким пользователям';
$string['course:changecategory'] = 'Изменять категорию курса';
$string['course:changefullname'] = 'Изменять полное название курса';
$string['course:changeidnumber'] = 'Изменять ID курса';
$string['course:changeshortname'] = 'Изменять краткое название курса';
$string['course:changesummary'] = 'Изменять описание курса';
$string['course:create'] = 'Создавать курсы';
$string['course:delete'] = 'Удалять курсы';
$string['course:enrolconfig'] = 'Настраивать способы записи на отдельные курсы';
$string['course:enrolreview'] = 'Просматривать участников курса';
$string['course:ignoreavailabilityrestrictions'] = 'Игнорировать ограничения доступности';
$string['course:ignorefilesizelimits'] = 'Использовать файлы с размером превышающим любое из ограничений';
$string['course:isincompletionreports'] = 'Отображаться в отчетах о завершении';
$string['course:manageactivities'] = 'Управлять элементами курса';
$string['course:managefiles'] = 'Управлять файлами';
$string['course:managegrades'] = 'Управлять оценками';
$string['course:managegroups'] = 'Управлять группами';
$string['course:managescales'] = 'Управлять шкалами';
$string['course:markcomplete'] = 'Отмечать пользователей как завершивших курс';
$string['course:movesections'] = 'Перемещать разделы';
$string['course:overridecompletion'] = 'Переопределять статус завершения элемента';
$string['course:publish'] = 'Опубликовывать курс';
$string['course:renameroles'] = 'Переименовывать роли';
$string['course:request'] = 'Запрашивать создание новых курсов';
$string['course:reset'] = 'Очищать курс';
$string['course:reviewotherusers'] = 'Просматривать страницу «Другие пользователи»';
$string['course:sectionvisibility'] = 'Управлять видимостью разделов';
$string['course:setcurrentsection'] = 'Устанавливать текущий раздел';
$string['course:setforcedlanguage'] = 'Задавать язык курса';
$string['course:tag'] = 'Изменять теги курса';
$string['course:update'] = 'Изменять установки курса';
$string['course:useremail'] = 'Включать/выключать адреса электронной почты';
$string['course:view'] = 'Просматривать курсы не являясь их участником';
$string['course:viewcoursegrades'] = 'Просматривать оценки курса';
$string['course:viewhiddenactivities'] = 'Просматривать скрытые элементы курсов';
$string['course:viewhiddencourses'] = 'Просматривать скрытые курсы';
$string['course:viewhiddensections'] = 'Просматривать скрытые разделы';
$string['course:viewhiddenuserfields'] = 'Просматривать скрытые поля данных пользователей';
$string['course:viewparticipants'] = 'Просматривать список участников курса';
$string['course:viewscales'] = 'Просматривать шкалы';
$string['course:viewsuspendedusers'] = 'Просматривать приостановленных пользователей';
$string['course:visibility'] = 'Скрывать/отображать курсы';
$string['createrolebycopying'] = 'Создать новую роль, скопировав роль «{$a}»';
$string['createthisrole'] = 'Создать роль';
$string['currentcontext'] = 'Текущий контекст';
$string['currentrole'] = 'Текущая роль';
$string['customroledescription'] = 'Отображаемое описание';
$string['customroledescription_help'] = 'Если отображаемое описание роли не заполнено, автоматически будет использоваться стандартное описание из языкового пакета.';
$string['customrolename'] = 'Отображаемое полное название';
$string['customrolename_help'] = 'Если отображаемое название роли не заполнено, автоматически будет использоваться стандартное значение из языкового пакета. Для всех нестандартных ролей это поле необходимо заполнить.';
$string['defaultrole'] = 'Роль по умолчанию';
$string['defaultx'] = 'По умолчанию: {$a}';
$string['defineroles'] = 'Определить роли';
$string['deletecourseoverrides'] = 'Удалить все переопределения в курсе';
$string['deletelocalroles'] = 'Удалить все локальные назначения ролей';
$string['deleterolesure'] = '<p>Вы уверены, что хотите удалить роль «{$a->name} ({$a->shortname})»?</p><p> В настоящее время эта роль назначена {$a->count} пользователю(ям).</p>';
$string['deletexrole'] = 'Удалить роль «{$a}»';
$string['duplicaterole'] = 'Создать копию роли';
$string['duplicaterolesure'] = '<p>Вы уверены, что хотите создать копию роли «{$a->name} ({$a->shortname})»?</p>';
$string['editingrolex'] = 'Редактирование роли «{$a}»';
$string['editrole'] = 'Редактировать роль';
$string['editxrole'] = 'Редактировать роль «{$a}»';
$string['errorbadrolename'] = 'Некорректное название роли';
$string['errorbadroleshortname'] = 'Неправильное краткое название роли';
$string['errorexistsrolename'] = 'Роль с таким названием уже существует';
$string['errorexistsroleshortname'] = 'Роль с таким кратким названием уже существует';
$string['errorroleshortnametoolong'] = 'Короткое имя не должно превышать 100 символов';
$string['eventroleallowassignupdated'] = 'Разрешение на назначение роли обновлено';
$string['eventroleallowoverrideupdated'] = 'Разрешение на переопределение роли обновлено';
$string['eventroleallowswitchupdated'] = 'Разрешение на переключение между ролями обновлено';
$string['eventroleallowviewupdated'] = 'Разрешение на просмотр ролей обновлено';
$string['eventroleassigned'] = 'Роль назначена';
$string['eventrolecapabilitiesupdated'] = 'Права для роли обновлены';
$string['eventroledeleted'] = 'Роль удалена';
$string['eventroleunassigned'] = 'Назначение роли снято';
$string['existingadmins'] = 'Администраторы сайта';
$string['existingusers'] = 'Имеющихся пользователей - {$a}';
$string['explanation'] = 'Пояснение';
$string['export'] = 'Экспорт';
$string['extusers'] = 'Имеющиеся пользователи';
$string['extusersmatching'] = 'Имеющиеся пользователи, соответствующие шаблону «{$a}»';
$string['filter:manage'] = 'Управлять локальными настройками фильтров';
$string['frontpageuser'] = 'Аутентифицированный пользователь на главной странице';
$string['frontpageuserdescription'] = 'Все пользователи, вошедшие на главную страницу.';
$string['globalrole'] = 'Роль в системе';
$string['globalroleswarning'] = 'ВНИМАНИЕ! Любая роль, назначенная пользователю на этой странице, будет применяться к нему во всей системе, включая главную страницу и все курсы.';
$string['gotoassignroles'] = 'Перейти к назначению ролей на этом уровне типа «{$a->contextlevel}»';
$string['gotoassignsystemroles'] = 'Перейти к назначению глобальных ролей';
$string['grade:edit'] = 'Редактировать оценки';
$string['grade:export'] = 'Экспортировать оценки';
$string['grade:hide'] = 'Скрывать/отображать оценки или элементы';
$string['grade:import'] = 'Импортировать оценки';
$string['grade:lock'] = 'Блокировать оценки или элементы';
$string['grade:manage'] = 'Управлять элементами оценивания';
$string['grade:managegradingforms'] = 'Управлять передовыми методами оценивания';
$string['grade:manageletters'] = 'Управлять буквенными оценками';
$string['grade:manageoutcomes'] = 'Управлять показателями';
$string['grade:managesharedforms'] = 'Управлять шаблонами форм передового оценивания';
$string['grade:override'] = 'Переопределять оценки';
$string['grade:sharegradingforms'] = 'Делать общим шаблон формы передового оценивания';
$string['grade:unlock'] = 'Разблокировать оценки или элементы';
$string['grade:view'] = 'Просматривать свои оценки';
$string['grade:viewall'] = 'Просматривать оценки других пользователей';
$string['grade:viewhidden'] = 'Просматривать скрытые от владельца оценки';
$string['highlightedcellsshowdefault'] = 'Разрешения, выделенные в таблице ниже - это значения по умолчанию для указанного выше прототипа роли.';
$string['highlightedcellsshowinherit'] = 'Выделенные ячейки в отображаемой ниже таблице показывают разрешения (если таковые имеются), которые будут унаследованы. Помимо тех прав, разрешение для которых Вы действительно хотите изменить, везде следует оставить значение «Наследовать».';
$string['inactiveformorethan'] = 'неактивные более чем {$a->timeperiod}';
$string['ingroup'] = 'в группе «{$a->group}»';
$string['inherit'] = 'Наследовать';
$string['invalidpresetfile'] = 'Некорректный файл определения роли';
$string['legacy:admin'] = 'Устаревшая роль: Администратор';
$string['legacy:coursecreator'] = 'Устаревшая роль: Создатель курса';
$string['legacy:editingteacher'] = 'Устаревшая роль: Учитель (с правом редктирования)';
$string['legacy:guest'] = 'Устаревшая роль: Гость';
$string['legacy:student'] = 'Устаревшая роль: Студент';
$string['legacy:teacher'] = 'Устаревшая роль: Ассистент (без права редактирования)';
$string['legacytype'] = 'Соответствующая устаревшая роль (для совместимости)';
$string['legacy:user'] = 'Устаревшая роль: Аутентифицированный пользователь';
$string['listallroles'] = 'Список всех ролей';
$string['localroles'] = 'Локально назначенные роли';
$string['mainadmin'] = 'Главный администратор';
$string['mainadminset'] = 'Назначить главным администратором';
$string['manageadmins'] = 'Управление администраторами сайта';
$string['manager'] = 'Управляющий';
$string['managerdescription'] = 'Управляющие имеют доступ к курсу и могут изменять его. Они, как правило, не участвуют в курсах.';
$string['manageroles'] = 'Управление ролями';
$string['maybeassignedin'] = 'Типы контекста, где эта роль может быть назначена';
$string['morethan'] = 'Более {$a}';
$string['multipleroles'] = 'Несколько ролей';
$string['my:configsyspages'] = 'Настраивать системные шаблоны для страниц «Личный кабинет»';
$string['my:manageblocks'] = 'Управлять блоками на странице «Личный кабинет»';
$string['neededroles'] = 'Роли, которым дано это право';
$string['nocapabilitiesincontext'] = 'Нет прав, доступных в этом контексте';
$string['noneinthisx'] = 'Никого в этом контексте типа «{$a}»';
$string['noneinthisxmatching'] = 'Нет пользователей, соответствующих шаблону «{$a->search}» в этом контексте типа «{$a->contexttype}»';
$string['norole'] = 'Пустая роль';
$string['noroleassignments'] = 'Этому пользователю не назначено ни одной роли нигде на сайте';
$string['noroles'] = 'Нет ролей';
$string['notabletoassignroleshere'] = 'Назначение ролей в данном контексте не было разрешено администратором.';
$string['notabletooverrideroleshere'] = 'Вы не можете переопределить права здесь ни для какой из ролей';
$string['notes:manage'] = 'Управлять заметками';
$string['notes:view'] = 'Просматривать заметки';
$string['notset'] = 'Не установлено';
$string['novisibleroles'] = 'Нет ролей';
$string['overrideanotherrole'] = 'Переопределить другую роль';
$string['overridecontext'] = 'Контекст переопределения';
$string['overridepermissions'] = 'Переопределение разрешений';
$string['overridepermissionsforrole'] = 'Переопределить разрешения для роли «{$a->role}» в контексте «{$a->context}»';
$string['overridepermissions_help'] = 'Переопределение разрешений позволяет давать и отзывать права в конкретных контекстах.';
$string['overridepermissionsin'] = 'Переопределить разрешения в контексте {$a}';
$string['overrideroles'] = 'Переопределить роли';
$string['overriderolesin'] = 'Переопределить роли в «{$a}»';
$string['overrides'] = 'Переопределения';
$string['overridesbycontext'] = 'Переопределения (в контексте)';
$string['permission'] = 'Разрешение';
$string['permission_help'] = 'Разрешение - это параметр, связанный с правами. Есть 4 варианта:

* Не установлено
* Дать право - право будет дано
* Отозвать право - право будет отозвано, даже если оно было дано на более высоком уровне (контексте)
* Лишить права - право отзывается и не может быть дано на любом нижележащем уровне (контексте)';
$string['permissions'] = 'Права';
$string['permissionsforuser'] = 'Права пользователя {$a}';
$string['permissionsincontext'] = 'Права в «{$a}»';
$string['portfolio:export'] = 'Экспортировать в портфолио';
$string['potentialusers'] = '{$a} потенциальных пользователей';
$string['potusers'] = 'Потенциальные пользователи';
$string['potusersmatching'] = 'Потенциальные пользователи, соответствующие шаблону «{$a}»';
$string['prevent'] = 'Отозвать право';
$string['privacy:metadata:preference:showadvanced'] = 'Обработка переключения кнопки «Расширенный режим»';
$string['privacy:metadata:role_assignments'] = 'Назначение ролей';
$string['privacy:metadata:role_assignments:component'] = 'Плагин, отвечающий за назначение роли (пусто при назначении вручную).';
$string['privacy:metadata:role_assignments:itemid'] = 'ID экземпляра авторизации/записи на курс, отвечающего за назначение этой роли.';
$string['privacy:metadata:role_assignments:modifierid'] = 'ID пользователя, создавшего или изменившего назначение ролей.';
$string['privacy:metadata:role_assignments:roleid'] = 'ID роли.';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Эта таблица хранит роли, назначенные в любом контексте.';
$string['privacy:metadata:role_assignments:timemodified'] = 'Дата, когда назначение роли было создано или изменено.';
$string['privacy:metadata:role_assignments:userid'] = 'ID пользователя.';
$string['privacy:metadata:role_capabilities'] = 'Права ролей';
$string['privacy:metadata:role_capabilities:capability'] = 'Название права.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'ID пользователя, создавшего или изменившего право.';
$string['privacy:metadata:role_capabilities:permission'] = 'Разрешение для права: наследовать, дать право, отозвать право или лишить права.';
$string['privacy:metadata:role_capabilities:roleid'] = 'ID роли.';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Эта таблица хранит права и переопределения прав для конкретной роли в конкретном контексте.';
$string['privacy:metadata:role_capabilities:timemodified'] = 'Дата, когда право было создано или изменено.';
$string['privacy:metadata:role_cohortroles'] = 'Роли в глобальной группе';
$string['prohibit'] = 'Лишить права';
$string['prohibitedroles'] = 'Лишены права';
$string['question:add'] = 'Добавлять новые вопросы';
$string['question:config'] = 'Настраивать типы вопросов';
$string['question:editall'] = 'Редактировать все вопросы';
$string['question:editmine'] = 'Редактировать свои вопросы';
$string['question:flag'] = 'Помечать вопросы при попытке ответа';
$string['question:managecategory'] = 'Редактировать категории вопросов';
$string['question:moveall'] = 'Перемещать все вопросы';
$string['question:movemine'] = 'Перемещать свои вопросы';
$string['question:tagall'] = 'Отмечать тегами все вопросы';
$string['question:tagmine'] = 'Отмечать тегами свои вопросы';
$string['question:useall'] = 'Использовать все вопросы';
$string['question:usemine'] = 'Использовать свои вопросы';
$string['question:viewall'] = 'Просматривать все вопросы';
$string['question:viewmine'] = 'Просматривать свои вопросы';
$string['rating:rate'] = 'Добавлять оценки к элементам';
$string['rating:view'] = 'Просматривать свою итоговую оценку';
$string['rating:viewall'] = 'Просматривать все черновые оценки';
$string['rating:viewany'] = 'Просматривать все итоговые оценки';
$string['resetrole'] = 'Сбросить';
$string['resettingrole'] = 'Сброс роли «{$a}»';
$string['restore:configure'] = 'Настраивать параметры восстановления';
$string['restore:createuser'] = 'Создавать пользователей при восстановлении';
$string['restore:restoreactivity'] = 'Восстанавливать элементы курса';
$string['restore:restorecourse'] = 'Восстанавливать курсы';
$string['restore:restoresection'] = 'Восстанавливать разделы';
$string['restore:restoretargethub'] = 'Восстанавливать курсы из файлов, загруженных из Moodle.net';
$string['restore:restoretargetimport'] = 'Восстанавливать курсы из файлов, предназначенных для импорта';
$string['restore:rolldates'] = 'При восстановлении переносить даты, установленные для элементов курса';
$string['restore:uploadfile'] = 'Загружать файлы в области для  резервных копий';
$string['restore:userinfo'] = 'Восстанавливать данные пользователей';
$string['restore:viewautomatedfilearea'] = 'Восстанавливать курсы из автоматически созданных резервных копий';
$string['risks'] = 'Риски';
$string['roleallowheader'] = 'Дать право следующей роли:';
$string['roleallowinfo'] = 'Выберите роль для добавления в список ролей, которым в контексте «{$a->context}» дано право «{$a->cap}»:';
$string['role:assign'] = 'Назначать роли пользователям';
$string['roleassignments'] = 'Назначения ролей';
$string['roledefinitions'] = 'Определения ролей';
$string['rolefullname'] = 'Название роли';
$string['roleincontext'] = '{$a->role} в контексте {$a->context}';
$string['role:manage'] = 'Создавать роли и управлять ими';
$string['role:override'] = 'Переопределять разрешения для других пользователей';
$string['roleprohibitheader'] = 'Лишить права следующую роль:';
$string['roleprohibitinfo'] = 'Выберите роль для добавления в список ролей, которые в контексте «{$a->context}» лишены права «{$a->cap}»:';
$string['rolerepreset'] = 'Использовать файл определения роли';
$string['roleresetdefaults'] = 'Значения по умолчанию';
$string['roleresetrole'] = 'Использовать роль или прототип роли';
$string['role:review'] = 'Просматривать разрешения для других пользователей';
$string['rolerisks'] = 'Риски роли';
$string['roles'] = 'Роли';
$string['role:safeoverride'] = 'Переопределять безопасные разрешения для других пользователей';
$string['roleselect'] = 'Выбрать роль';
$string['rolesforuser'] = 'Роли для пользователя {$a}';
$string['roles_help'] = 'Роль - набор разрешений (прав), определенных в масштабах всей системы. Роли можно назначать конкретным пользователям на конкретных уровнях (в конкретных контекстах).';
$string['roleshortname'] = 'Краткое название';
$string['roleshortname_help'] = 'Краткое название роли используется в качестве идентификатора для ряда системных процессов, поэтому в названии допустимы только буквенно-цифровые символы ASCII. Не изменяйте краткие названия стандартных ролей.';
$string['role:switchroles'] = 'Переключаться к другой роли';
$string['roletoassign'] = 'Назначить роль';
$string['roletooverride'] = 'Переопределить роль';
$string['safeoverridenotice'] = 'Примечание: Потенциально опасные права заблокированы, так как Вам разрешено переопределять только безопасные права.';
$string['search:query'] = 'Выполнять поиск по всему сайту';
$string['selectanotheruser'] = 'Выберите другого пользователя';
$string['selectauser'] = 'Выберите пользователя';
$string['selectrole'] = 'Выберите роль';
$string['showallroles'] = 'Показать все роли';
$string['showthisuserspermissions'] = 'Показать права этого пользователя';
$string['site:accessallgroups'] = 'Получать доступ ко всем группам';
$string['siteadministrators'] = 'Администраторы сайта';
$string['site:approvecourse'] = 'Одобрять создание курса';
$string['site:backup'] = 'Выполнять резервное копирование курсов';
$string['site:config'] = 'Изменять конфигурацию сайта';
$string['site:configview'] = 'Видеть дерево администрирования сайта (но не все его страницы)';
$string['site:deleteanymessage'] = 'Удалять все сообщения на сайте';
$string['site:deleteownmessage'] = 'Удалять переписку с пользователем';
$string['site:doanything'] = 'Разрешено делать всё';
$string['site:doclinks'] = 'Отображать ссылку на оф. сайт документации';
$string['site:forcelanguage'] = 'Игнорировать язык курса';
$string['site:import'] = 'Импортировать другие курсы в курс';
$string['site:maintenanceaccess'] = 'Доступ к сайту в режиме обслуживания';
$string['site:manageallmessaging'] = 'Добавлять, удалять, блокировать и разблокировать контакты любого пользователя';
$string['site:manageblocks'] = 'Управлять блоками на странице';
$string['site:mnetloginfromremote'] = 'Входить из внешнего приложения через MNet';
$string['site:mnetlogintoremote'] = 'Подключаться к внешнему приложению через MNet';
$string['site:readallmessages'] = 'Читать все сообщения на сайте';
$string['site:restore'] = 'Восстанавливать курсы';
$string['site:sendmessage'] = 'Отправлять сообщение любому пользователю';
$string['site:trustcontent'] = 'Доверять содержимому';
$string['site:uploadusers'] = 'Загружать новых пользователей из файла';
$string['site:viewfullnames'] = 'Всегда видеть полные имена пользователей';
$string['site:viewparticipants'] = 'Просматривать участников';
$string['site:viewreports'] = 'Просматривать отчеты';
$string['site:viewuseridentity'] = 'Видеть персональные данные в списках пользователей';
$string['tag:edit'] = 'Редактировать существующие теги';
$string['tag:editblocks'] = 'Редактировать блоки на странице тегов';
$string['tag:flag'] = 'Помечать тег как неуместный';
$string['tag:manage'] = 'Управлять всеми тегами';
$string['thisnewrole'] = 'Эта новая роль';
$string['thisusersroles'] = 'Роли, назначенные этому пользователю';
$string['unassignarole'] = 'Отменить назначение роли «{$a}»';
$string['unassignconfirm'] = 'Вы действительно хотите отменить назначение пользователю «{$a->user}» роли «{$a->role}»?';
$string['unassignerror'] = 'Ошибка при отмене назначения пользователю «{$a->user}» роли «{$a->role}».';
$string['user:changeownpassword'] = 'Изменять собственный пароль';
$string['user:create'] = 'Создавать пользователей';
$string['user:delete'] = 'Удалять пользователей';
$string['user:editmessageprofile'] = 'Изменять профили обмена сообщениями других пользователей';
$string['user:editownmessageprofile'] = 'Изменять свой профиль обмена сообщениями';
$string['user:editownprofile'] = 'Изменять свой собственный профиль';
$string['user:editprofile'] = 'Изменять профили пользователей';
$string['user:ignoreuserquota'] = 'Игнорировать ограничение квоты пользователя';
$string['user:loginas'] = 'Входить в систему под именем другого пользователя';
$string['user:manageblocks'] = 'Управлять блоками в профилях других пользователей';
$string['user:manageownblocks'] = 'Управлять блоками в собственном публичном профиле';
$string['user:manageownfiles'] = 'Управлять файлами в области личных файлов';
$string['user:managesyspages'] = 'Настраивать вид страницы публичных профилей по умолчанию';
$string['user:readuserblogs'] = 'Просматривать блоги всех пользователей';
$string['user:readuserposts'] = 'Просматривать сообщения всех пользователей на форумах';
$string['usersfrom'] = 'Пользователи из контекста «{$a}»';
$string['usersfrommatching'] = 'Пользователи в контексте «{$a->contextname}», соответствующие шаблону «{$a->search}»';
$string['usersinthisx'] = 'Пользователи в этом контексте типа «{$a}»';
$string['usersinthisxmatching'] = 'Пользователи в этом контексте типа «{$a->contexttype}», соответствующие шаблону «{$a->search}»';
$string['userswithrole'] = 'Все пользователи с ролью';
$string['userswiththisrole'] = 'Пользователи с ролью';
$string['user:update'] = 'Обновлять профили других пользователей';
$string['user:viewalldetails'] = 'Просматривать всю информацию о пользователях';
$string['user:viewdetails'] = 'Просматривать профили других пользоватеей';
$string['user:viewhiddendetails'] = 'Просматривать скрытые поля профилей других пользователей';
$string['user:viewlastip'] = 'Просматривать последний IP-адрес пользователя';
$string['user:viewuseractivitiesreport'] = 'Просматривать отчеты о деятельности пользователей';
$string['user:viewusergrades'] = 'Просматривать оценки другого пользователя';
$string['useshowadvancedtochange'] = 'Для изменения используйте кнопку «Показать дополнительные»';
$string['viewingdefinitionofrolex'] = 'Просмотр определения роли «{$a}»';
$string['viewrole'] = 'Просмотр параметров роли';
$string['webservice:createmobiletoken'] = 'Создавать ключ для доступа к веб-службе с мобильных устройств';
$string['webservice:createtoken'] = 'Создавать ключ для веб-службы';
$string['webservice:managealltokens'] = 'Управлять токенами веб-сервисов всех пользователей';
$string['whydoesuserhavecap'] = 'Почему пользователь «{$a->fullname}» имеет право «{$a->capability}» в контексте «{$a->context}»?';
$string['whydoesusernothavecap'] = 'Почему пользователь «{$a->fullname}» не имеет права «{$a->capability}» в контексте «{$a->context}»?';
$string['xroleassignments'] = 'Роли, назначенные пользователю {$a}';
$string['xuserswiththerole'] = 'Пользователи с ролью «{$a->role}»';
