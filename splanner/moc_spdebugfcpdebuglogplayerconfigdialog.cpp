/****************************************************************************
** Meta object code from reading C++ file 'spdebugfcpdebuglogplayerconfigdialog.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spdebugfcpdebuglogplayerconfigdialog.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpDebugFCPDebugLogPlayerConfigDialog[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       5,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      38,   37,   37,   37, 0x08,
      69,   37,   37,   37, 0x08,
     109,   37,   37,   37, 0x08,
     135,   37,   37,   37, 0x08,
     160,   37,   37,   37, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpDebugFCPDebugLogPlayerConfigDialog[] = {
    "SpDebugFCPDebugLogPlayerConfigDialog\0"
    "\0on_gameLogFileButton_clicked()\0"
    "on_playersLogDirectoryhButton_clicked()\0"
    "on_cancelButton_clicked()\0"
    "on_debugButton_clicked()\0"
    "on_ResetPushButton_clicked()\0"
};

void SpDebugFCPDebugLogPlayerConfigDialog::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpDebugFCPDebugLogPlayerConfigDialog *_t = static_cast<SpDebugFCPDebugLogPlayerConfigDialog *>(_o);
        switch (_id) {
        case 0: _t->on_gameLogFileButton_clicked(); break;
        case 1: _t->on_playersLogDirectoryhButton_clicked(); break;
        case 2: _t->on_cancelButton_clicked(); break;
        case 3: _t->on_debugButton_clicked(); break;
        case 4: _t->on_ResetPushButton_clicked(); break;
        default: ;
        }
    }
    Q_UNUSED(_a);
}

const QMetaObjectExtraData SpDebugFCPDebugLogPlayerConfigDialog::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpDebugFCPDebugLogPlayerConfigDialog::staticMetaObject = {
    { &QDialog::staticMetaObject, qt_meta_stringdata_SpDebugFCPDebugLogPlayerConfigDialog,
      qt_meta_data_SpDebugFCPDebugLogPlayerConfigDialog, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpDebugFCPDebugLogPlayerConfigDialog::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpDebugFCPDebugLogPlayerConfigDialog::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpDebugFCPDebugLogPlayerConfigDialog::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpDebugFCPDebugLogPlayerConfigDialog))
        return static_cast<void*>(const_cast< SpDebugFCPDebugLogPlayerConfigDialog*>(this));
    return QDialog::qt_metacast(_clname);
}

int SpDebugFCPDebugLogPlayerConfigDialog::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QDialog::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 5)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 5;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
