/****************************************************************************
** Meta object code from reading C++ file 'sptestrcsoccersimconfigdialog.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'sptestrcsoccersimconfigdialog.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpTestRCSoccerSimConfigDialog[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
      10,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      31,   30,   30,   30, 0x08,
      68,   30,   30,   30, 0x08,
     107,   30,   30,   30, 0x08,
     140,   30,   30,   30, 0x08,
     170,   30,   30,   30, 0x08,
     205,   30,   30,   30, 0x08,
     242,   30,   30,   30, 0x08,
     276,   30,   30,   30, 0x08,
     302,   30,   30,   30, 0x08,
     327,   30,   30,   30, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpTestRCSoccerSimConfigDialog[] = {
    "SpTestRCSoccerSimConfigDialog\0\0"
    "on_logFilesDirectoryButton_clicked()\0"
    "on_simulatorExecutableButton_clicked()\0"
    "on_teamDirectoryButton_clicked()\0"
    "on_teamScriptButton_clicked()\0"
    "on_teamSetPlayFileButton_clicked()\0"
    "on_opponentDirectoryButton_clicked()\0"
    "on_opponentScriptButton_clicked()\0"
    "on_cancelButton_clicked()\0"
    "on_resetButton_clicked()\0"
    "on_testButton_clicked()\0"
};

void SpTestRCSoccerSimConfigDialog::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpTestRCSoccerSimConfigDialog *_t = static_cast<SpTestRCSoccerSimConfigDialog *>(_o);
        switch (_id) {
        case 0: _t->on_logFilesDirectoryButton_clicked(); break;
        case 1: _t->on_simulatorExecutableButton_clicked(); break;
        case 2: _t->on_teamDirectoryButton_clicked(); break;
        case 3: _t->on_teamScriptButton_clicked(); break;
        case 4: _t->on_teamSetPlayFileButton_clicked(); break;
        case 5: _t->on_opponentDirectoryButton_clicked(); break;
        case 6: _t->on_opponentScriptButton_clicked(); break;
        case 7: _t->on_cancelButton_clicked(); break;
        case 8: _t->on_resetButton_clicked(); break;
        case 9: _t->on_testButton_clicked(); break;
        default: ;
        }
    }
    Q_UNUSED(_a);
}

const QMetaObjectExtraData SpTestRCSoccerSimConfigDialog::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpTestRCSoccerSimConfigDialog::staticMetaObject = {
    { &QDialog::staticMetaObject, qt_meta_stringdata_SpTestRCSoccerSimConfigDialog,
      qt_meta_data_SpTestRCSoccerSimConfigDialog, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpTestRCSoccerSimConfigDialog::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpTestRCSoccerSimConfigDialog::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpTestRCSoccerSimConfigDialog::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpTestRCSoccerSimConfigDialog))
        return static_cast<void*>(const_cast< SpTestRCSoccerSimConfigDialog*>(this));
    return QDialog::qt_metacast(_clname);
}

int SpTestRCSoccerSimConfigDialog::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QDialog::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 10)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 10;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
