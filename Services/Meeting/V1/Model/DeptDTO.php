<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeptDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeptDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deptCode  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    * deptName  部门名称。
    * parentDeptCode  父部门编码，默认为根部门。 默认值：1。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    * outPermission  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    * designatedOutDeptCodes  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    * sortLevel  部门排序号，序号越小,部门排序越靠前。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deptCode' => 'string',
            'deptName' => 'string',
            'parentDeptCode' => 'string',
            'note' => 'string',
            'inPermission' => 'string',
            'outPermission' => 'string',
            'designatedOutDeptCodes' => 'string[]',
            'sortLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deptCode  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    * deptName  部门名称。
    * parentDeptCode  父部门编码，默认为根部门。 默认值：1。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    * outPermission  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    * designatedOutDeptCodes  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    * sortLevel  部门排序号，序号越小,部门排序越靠前。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deptCode' => null,
        'deptName' => null,
        'parentDeptCode' => null,
        'note' => null,
        'inPermission' => null,
        'outPermission' => null,
        'designatedOutDeptCodes' => null,
        'sortLevel' => 'int32'
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
    * deptCode  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    * deptName  部门名称。
    * parentDeptCode  父部门编码，默认为根部门。 默认值：1。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    * outPermission  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    * designatedOutDeptCodes  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    * sortLevel  部门排序号，序号越小,部门排序越靠前。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deptCode' => 'deptCode',
            'deptName' => 'deptName',
            'parentDeptCode' => 'parentDeptCode',
            'note' => 'note',
            'inPermission' => 'inPermission',
            'outPermission' => 'outPermission',
            'designatedOutDeptCodes' => 'designatedOutDeptCodes',
            'sortLevel' => 'sortLevel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deptCode  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    * deptName  部门名称。
    * parentDeptCode  父部门编码，默认为根部门。 默认值：1。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    * outPermission  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    * designatedOutDeptCodes  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    * sortLevel  部门排序号，序号越小,部门排序越靠前。
    *
    * @var string[]
    */
    protected static $setters = [
            'deptCode' => 'setDeptCode',
            'deptName' => 'setDeptName',
            'parentDeptCode' => 'setParentDeptCode',
            'note' => 'setNote',
            'inPermission' => 'setInPermission',
            'outPermission' => 'setOutPermission',
            'designatedOutDeptCodes' => 'setDesignatedOutDeptCodes',
            'sortLevel' => 'setSortLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deptCode  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    * deptName  部门名称。
    * parentDeptCode  父部门编码，默认为根部门。 默认值：1。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    * outPermission  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    * designatedOutDeptCodes  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    * sortLevel  部门排序号，序号越小,部门排序越靠前。
    *
    * @var string[]
    */
    protected static $getters = [
            'deptCode' => 'getDeptCode',
            'deptName' => 'getDeptName',
            'parentDeptCode' => 'getParentDeptCode',
            'note' => 'getNote',
            'inPermission' => 'getInPermission',
            'outPermission' => 'getOutPermission',
            'designatedOutDeptCodes' => 'getDesignatedOutDeptCodes',
            'sortLevel' => 'getSortLevel'
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
    const IN_PERMISSION_UNLIMITED = 'UNLIMITED';
    const IN_PERMISSION_OPEN = 'OPEN';
    const IN_PERMISSION_CLOSE = 'CLOSE';
    const IN_PERMISSION_DESIGNATED_DEPARTMENT = 'DESIGNATED_DEPARTMENT';
    const OUT_PERMISSION_UNLIMITED = 'UNLIMITED';
    const OUT_PERMISSION_ONLY_SELF = 'ONLY_SELF';
    const OUT_PERMISSION_SELF_AND_CHILD_DEPARTMENT = 'SELF_AND_CHILD_DEPARTMENT';
    const OUT_PERMISSION_DESIGNATED_DEPARTMENT = 'DESIGNATED_DEPARTMENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInPermissionAllowableValues()
    {
        return [
            self::IN_PERMISSION_UNLIMITED,
            self::IN_PERMISSION_OPEN,
            self::IN_PERMISSION_CLOSE,
            self::IN_PERMISSION_DESIGNATED_DEPARTMENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOutPermissionAllowableValues()
    {
        return [
            self::OUT_PERMISSION_UNLIMITED,
            self::OUT_PERMISSION_ONLY_SELF,
            self::OUT_PERMISSION_SELF_AND_CHILD_DEPARTMENT,
            self::OUT_PERMISSION_DESIGNATED_DEPARTMENT,
        ];
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
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['parentDeptCode'] = isset($data['parentDeptCode']) ? $data['parentDeptCode'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['inPermission'] = isset($data['inPermission']) ? $data['inPermission'] : null;
        $this->container['outPermission'] = isset($data['outPermission']) ? $data['outPermission'] : null;
        $this->container['designatedOutDeptCodes'] = isset($data['designatedOutDeptCodes']) ? $data['designatedOutDeptCodes'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deptCode']) && (mb_strlen($this->container['deptCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'deptCode', the character length must be smaller than or equal to 32.";
            }
        if ($this->container['deptName'] === null) {
            $invalidProperties[] = "'deptName' can't be null";
        }
            if ((mb_strlen($this->container['deptName']) > 128)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['deptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentDeptCode']) && (mb_strlen($this->container['parentDeptCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'parentDeptCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 96)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 0)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInPermissionAllowableValues();
                if (!is_null($this->container['inPermission']) && !in_array($this->container['inPermission'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'inPermission', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOutPermissionAllowableValues();
                if (!is_null($this->container['outPermission']) && !in_array($this->container['outPermission'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'outPermission', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] > 10000)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be bigger than or equal to 1.";
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
    * Gets deptCode
    *  部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码，企业内唯一，若携带则以携带为准，不支持修改。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
    *
    * @return string
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets parentDeptCode
    *  父部门编码，默认为根部门。 默认值：1。
    *
    * @return string|null
    */
    public function getParentDeptCode()
    {
        return $this->container['parentDeptCode'];
    }

    /**
    * Sets parentDeptCode
    *
    * @param string|null $parentDeptCode 父部门编码，默认为根部门。 默认值：1。
    *
    * @return $this
    */
    public function setParentDeptCode($parentDeptCode)
    {
        $this->container['parentDeptCode'] = $parentDeptCode;
        return $this;
    }

    /**
    * Gets note
    *  备注。
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note 备注。
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
        return $this;
    }

    /**
    * Gets inPermission
    *  其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    *
    * @return string|null
    */
    public function getInPermission()
    {
        return $this->container['inPermission'];
    }

    /**
    * Sets inPermission
    *
    * @param string|null $inPermission 其他用户对该部门下用户的访问权限。 * UNLIMITED：默认，不做限制 * OPEN：公开，其他部门都可访问（无论对方权限如何配置）
    *
    * @return $this
    */
    public function setInPermission($inPermission)
    {
        $this->container['inPermission'] = $inPermission;
        return $this;
    }

    /**
    * Gets outPermission
    *  该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    *
    * @return string|null
    */
    public function getOutPermission()
    {
        return $this->container['outPermission'];
    }

    /**
    * Sets outPermission
    *
    * @param string|null $outPermission 该部门下用户访问权限控制。 - UNLIMITED：不限制 - ONLY_SELF：仅能查询自己 - SELF_AND_CHILD_DEPARTMENT：该部门下用户能查询本部门及子部门通讯 - DESIGNATED_DEPARTMENT：该部门下用户能查询指定部门通讯录
    *
    * @return $this
    */
    public function setOutPermission($outPermission)
    {
        $this->container['outPermission'] = $outPermission;
        return $this;
    }

    /**
    * Gets designatedOutDeptCodes
    *  允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    *
    * @return string[]|null
    */
    public function getDesignatedOutDeptCodes()
    {
        return $this->container['designatedOutDeptCodes'];
    }

    /**
    * Sets designatedOutDeptCodes
    *
    * @param string[]|null $designatedOutDeptCodes 允许访问的部门列表,仅outPermission为DESIGNATED_DEPARTMENT时有效，最多支持配置150个部门。
    *
    * @return $this
    */
    public function setDesignatedOutDeptCodes($designatedOutDeptCodes)
    {
        $this->container['designatedOutDeptCodes'] = $designatedOutDeptCodes;
        return $this;
    }

    /**
    * Gets sortLevel
    *  部门排序号，序号越小,部门排序越靠前。
    *
    * @return int|null
    */
    public function getSortLevel()
    {
        return $this->container['sortLevel'];
    }

    /**
    * Sets sortLevel
    *
    * @param int|null $sortLevel 部门排序号，序号越小,部门排序越靠前。
    *
    * @return $this
    */
    public function setSortLevel($sortLevel)
    {
        $this->container['sortLevel'] = $sortLevel;
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

