<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GaussDBforOpenGaussRoleAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GaussDBforOpenGaussRoleAttributes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    * schema  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    * readonly  数据库角色权限。 - true：只读。 - false：可读可写。
    * defaultPrivilegeGrantee  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'schema' => 'string',
            'readonly' => 'bool',
            'defaultPrivilegeGrantee' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    * schema  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    * readonly  数据库角色权限。 - true：只读。 - false：可读可写。
    * defaultPrivilegeGrantee  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'schema' => null,
        'readonly' => null,
        'defaultPrivilegeGrantee' => null
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
    * name  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    * schema  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    * readonly  数据库角色权限。 - true：只读。 - false：可读可写。
    * defaultPrivilegeGrantee  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'schema' => 'schema',
            'readonly' => 'readonly',
            'defaultPrivilegeGrantee' => 'default_privilege_grantee'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    * schema  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    * readonly  数据库角色权限。 - true：只读。 - false：可读可写。
    * defaultPrivilegeGrantee  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'schema' => 'setSchema',
            'readonly' => 'setReadonly',
            'defaultPrivilegeGrantee' => 'setDefaultPrivilegeGrantee'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    * schema  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    * readonly  数据库角色权限。 - true：只读。 - false：可读可写。
    * defaultPrivilegeGrantee  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'schema' => 'getSchema',
            'readonly' => 'getReadonly',
            'defaultPrivilegeGrantee' => 'getDefaultPrivilegeGrantee'
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
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['defaultPrivilegeGrantee'] = isset($data['defaultPrivilegeGrantee']) ? $data['defaultPrivilegeGrantee'] : null;
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
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['readonly'] === null) {
            $invalidProperties[] = "'readonly' can't be null";
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
    *  数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
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
    * @param string $name 数据库角色名称。 不能使用系统用户或角色，且名称必须存在。 系统用户/角色包括“rdsAdmin”,“rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets schema
    *  SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    *
    * @return string
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string $schema SCHEMA名称。 不能和模板库以及系统内schema重名，且schema名称必须存在。 模板库包括postgres， template0 ，template1, 系统内schema包括public，information_schema。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets readonly
    *  数据库角色权限。 - true：只读。 - false：可读可写。
    *
    * @return bool
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool $readonly 数据库角色权限。 - true：只读。 - false：可读可写。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets defaultPrivilegeGrantee
    *  数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @return string|null
    */
    public function getDefaultPrivilegeGrantee()
    {
        return $this->container['defaultPrivilegeGrantee'];
    }

    /**
    * Sets defaultPrivilegeGrantee
    *
    * @param string|null $defaultPrivilegeGrantee 数据库用户/角色名称。 该字段的含义是将此用户/角色的权限授予给name字段指定的角色，通过readonly字段判断是否授予只读权限。 不能和系统用户/角色名称相同，且用户/角色名称必须存在，系统用户/角色包括“rdsAdmin”,“ rdsMetric”, “rdsBackup”, “rdsRepl”, “root”。
    *
    * @return $this
    */
    public function setDefaultPrivilegeGrantee($defaultPrivilegeGrantee)
    {
        $this->container['defaultPrivilegeGrantee'] = $defaultPrivilegeGrantee;
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

