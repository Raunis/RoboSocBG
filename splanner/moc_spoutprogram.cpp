/****************************************************************************
** Meta object code from reading C++ file 'spoutprogram.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/spoutprogram.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spoutprogram.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_ISpOutProgram[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       1,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       1,       // signalCount

 // signals: signature, parameters, type, tag, flags
      17,   15,   14,   14, 0x05,

       0        // eod
};

static const char qt_meta_stringdata_ISpOutProgram[] = {
    "ISpOutProgram\0\0,\0finish(ISpOutProgram*,bool)\0"
};

void ISpOutProgram::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        ISpOutProgram *_t = static_cast<ISpOutProgram *>(_o);
        switch (_id) {
        case 0: _t->finish((*reinterpret_cast< ISpOutProgram*(*)>(_a[1])),(*reinterpret_cast< bool(*)>(_a[2]))); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData ISpOutProgram::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject ISpOutProgram::staticMetaObject = {
    { &QObject::staticMetaObject, qt_meta_stringdata_ISpOutProgram,
      qt_meta_data_ISpOutProgram, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &ISpOutProgram::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *ISpOutProgram::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *ISpOutProgram::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_ISpOutProgram))
        return static_cast<void*>(const_cast< ISpOutProgram*>(this));
    return QObject::qt_metacast(_clname);
}

int ISpOutProgram::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QObject::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 1)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 1;
    }
    return _id;
}

// SIGNAL 0
void ISpOutProgram::finish(ISpOutProgram * _t1, bool _t2)
{
    void *_a[] = { 0, const_cast<void*>(reinterpret_cast<const void*>(&_t1)), const_cast<void*>(reinterpret_cast<const void*>(&_t2)) };
    QMetaObject::activate(this, &staticMetaObject, 0, _a);
}
static const uint qt_meta_data_SpOutProgram[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       1,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      16,   14,   13,   13, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpOutProgram[] = {
    "SpOutProgram\0\0,\0finish(ISpOutProgram*,bool)\0"
};

void SpOutProgram::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpOutProgram *_t = static_cast<SpOutProgram *>(_o);
        switch (_id) {
        case 0: _t->finish((*reinterpret_cast< ISpOutProgram*(*)>(_a[1])),(*reinterpret_cast< bool(*)>(_a[2]))); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData SpOutProgram::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpOutProgram::staticMetaObject = {
    { &QObject::staticMetaObject, qt_meta_stringdata_SpOutProgram,
      qt_meta_data_SpOutProgram, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpOutProgram::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpOutProgram::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpOutProgram::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpOutProgram))
        return static_cast<void*>(const_cast< SpOutProgram*>(this));
    return QObject::qt_metacast(_clname);
}

int SpOutProgram::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QObject::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 1)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 1;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
