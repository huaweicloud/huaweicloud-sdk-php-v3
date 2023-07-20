<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgresqlDatabaseForCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgresqlDatabaseForCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    * characterSet  数据库字符集。默认UTF8。
    * owner  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    * template  数据库模板名称，可选值template0，template1。默认template1。
    * lcCollate  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    * lcCtype  数据库分类集。默认en_US.UTF-8。
    * isRevokePublicPrivilege  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    * comment  数据库备注。 取值范围：长度1~512个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'characterSet' => 'string',
            'owner' => 'string',
            'template' => 'string',
            'lcCollate' => 'string',
            'lcCtype' => 'string',
            'isRevokePublicPrivilege' => 'bool',
            'comment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    * characterSet  数据库字符集。默认UTF8。
    * owner  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    * template  数据库模板名称，可选值template0，template1。默认template1。
    * lcCollate  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    * lcCtype  数据库分类集。默认en_US.UTF-8。
    * isRevokePublicPrivilege  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    * comment  数据库备注。 取值范围：长度1~512个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'characterSet' => null,
        'owner' => null,
        'template' => null,
        'lcCollate' => null,
        'lcCtype' => null,
        'isRevokePublicPrivilege' => null,
        'comment' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * name  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    * characterSet  数据库字符集。默认UTF8。
    * owner  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    * template  数据库模板名称，可选值template0，template1。默认template1。
    * lcCollate  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    * lcCtype  数据库分类集。默认en_US.UTF-8。
    * isRevokePublicPrivilege  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    * comment  数据库备注。 取值范围：长度1~512个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'characterSet' => 'character_set',
            'owner' => 'owner',
            'template' => 'template',
            'lcCollate' => 'lc_collate',
            'lcCtype' => 'lc_ctype',
            'isRevokePublicPrivilege' => 'is_revoke_public_privilege',
            'comment' => 'comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    * characterSet  数据库字符集。默认UTF8。
    * owner  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    * template  数据库模板名称，可选值template0，template1。默认template1。
    * lcCollate  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    * lcCtype  数据库分类集。默认en_US.UTF-8。
    * isRevokePublicPrivilege  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    * comment  数据库备注。 取值范围：长度1~512个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'characterSet' => 'setCharacterSet',
            'owner' => 'setOwner',
            'template' => 'setTemplate',
            'lcCollate' => 'setLcCollate',
            'lcCtype' => 'setLcCtype',
            'isRevokePublicPrivilege' => 'setIsRevokePublicPrivilege',
            'comment' => 'setComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    * characterSet  数据库字符集。默认UTF8。
    * owner  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    * template  数据库模板名称，可选值template0，template1。默认template1。
    * lcCollate  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    * lcCtype  数据库分类集。默认en_US.UTF-8。
    * isRevokePublicPrivilege  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    * comment  数据库备注。 取值范围：长度1~512个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'characterSet' => 'getCharacterSet',
            'owner' => 'getOwner',
            'template' => 'getTemplate',
            'lcCollate' => 'getLcCollate',
            'lcCtype' => 'getLcCtype',
            'isRevokePublicPrivilege' => 'getIsRevokePublicPrivilege',
            'comment' => 'getComment'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['characterSet'] = isset($data['characterSet']) ? $data['characterSet'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['lcCollate'] = isset($data['lcCollate']) ? $data['lcCollate'] : null;
        $this->container['lcCtype'] = isset($data['lcCtype']) ? $data['lcCtype'] : null;
        $this->container['isRevokePublicPrivilege'] = isset($data['isRevokePublicPrivilege']) ? $data['isRevokePublicPrivilege'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets name
    *  数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 数据库名称。  数据库名称长度可在1～63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和RDS for PostgreSQL模板库重名。  RDS for PostgreSQL模板库包括postgres， template0 ，template1。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets characterSet
    *  数据库字符集。默认UTF8。
    *
    * @return string|null
    */
    public function getCharacterSet()
    {
        return $this->container['characterSet'];
    }

    /**
    * Sets characterSet
    *
    * @param string|null $characterSet 数据库字符集。默认UTF8。
    *
    * @return $this
    */
    public function setCharacterSet($characterSet)
    {
        $this->container['characterSet'] = $characterSet;
        return $this;
    }

    /**
    * Gets owner
    *  数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 数据库所属用户，缺省时默认是root，不能和系统用户重名，且必须是已存在的用户。  系统用户包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”,“ rdsProxy”, “rdsDdm”。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets template
    *  数据库模板名称，可选值template0，template1。默认template1。
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template 数据库模板名称，可选值template0，template1。默认template1。
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets lcCollate
    *  数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    *
    * @return string|null
    */
    public function getLcCollate()
    {
        return $this->container['lcCollate'];
    }

    /**
    * Sets lcCollate
    *
    * @param string|null $lcCollate 数据库排序集。默认en_US.UTF-8。  - 须知： 不同的排序规则下，相同字符串的比较其结果可能是不同的。 例如，在en_US.utf8下， select 'a'>'A';执行结果为false，但在'C'下，select 'a'>'A';结果为true。如果数据库从“O”迁移到PostgreSQL，数据库排序集需使用'C'才能得到一致的预期。支持的排序规则可以查询系统表 pg_collation。
    *
    * @return $this
    */
    public function setLcCollate($lcCollate)
    {
        $this->container['lcCollate'] = $lcCollate;
        return $this;
    }

    /**
    * Gets lcCtype
    *  数据库分类集。默认en_US.UTF-8。
    *
    * @return string|null
    */
    public function getLcCtype()
    {
        return $this->container['lcCtype'];
    }

    /**
    * Sets lcCtype
    *
    * @param string|null $lcCtype 数据库分类集。默认en_US.UTF-8。
    *
    * @return $this
    */
    public function setLcCtype($lcCtype)
    {
        $this->container['lcCtype'] = $lcCtype;
        return $this;
    }

    /**
    * Gets isRevokePublicPrivilege
    *  是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    *
    * @return bool|null
    */
    public function getIsRevokePublicPrivilege()
    {
        return $this->container['isRevokePublicPrivilege'];
    }

    /**
    * Sets isRevokePublicPrivilege
    *
    * @param bool|null $isRevokePublicPrivilege 是否回收public schema的PUBLIC CREATE权限。 true，表示回收该权限。 false，表示不回收该权限。 缺省时默认是false。
    *
    * @return $this
    */
    public function setIsRevokePublicPrivilege($isRevokePublicPrivilege)
    {
        $this->container['isRevokePublicPrivilege'] = $isRevokePublicPrivilege;
        return $this;
    }

    /**
    * Gets comment
    *  数据库备注。 取值范围：长度1~512个字符。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 数据库备注。 取值范围：长度1~512个字符。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

