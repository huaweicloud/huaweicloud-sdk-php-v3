<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KernelForensicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KernelForensicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * readAddr  **参数解释**： 地址 **取值范围**： 不涉及
    * syscallNum  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    * function  **参数解释**： 系统函数 **取值范围**： 不涉及
    * module  **参数解释**： 内核模块 **取值范围**： 不涉及
    * extInfo  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'readAddr' => 'int',
            'syscallNum' => 'int',
            'function' => 'string',
            'module' => 'string',
            'extInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * readAddr  **参数解释**： 地址 **取值范围**： 不涉及
    * syscallNum  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    * function  **参数解释**： 系统函数 **取值范围**： 不涉及
    * module  **参数解释**： 内核模块 **取值范围**： 不涉及
    * extInfo  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'readAddr' => null,
        'syscallNum' => null,
        'function' => null,
        'module' => null,
        'extInfo' => null
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
    * readAddr  **参数解释**： 地址 **取值范围**： 不涉及
    * syscallNum  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    * function  **参数解释**： 系统函数 **取值范围**： 不涉及
    * module  **参数解释**： 内核模块 **取值范围**： 不涉及
    * extInfo  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'readAddr' => 'read_addr',
            'syscallNum' => 'syscall_num',
            'function' => 'function',
            'module' => 'module',
            'extInfo' => 'ext_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * readAddr  **参数解释**： 地址 **取值范围**： 不涉及
    * syscallNum  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    * function  **参数解释**： 系统函数 **取值范围**： 不涉及
    * module  **参数解释**： 内核模块 **取值范围**： 不涉及
    * extInfo  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'readAddr' => 'setReadAddr',
            'syscallNum' => 'setSyscallNum',
            'function' => 'setFunction',
            'module' => 'setModule',
            'extInfo' => 'setExtInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * readAddr  **参数解释**： 地址 **取值范围**： 不涉及
    * syscallNum  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    * function  **参数解释**： 系统函数 **取值范围**： 不涉及
    * module  **参数解释**： 内核模块 **取值范围**： 不涉及
    * extInfo  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'readAddr' => 'getReadAddr',
            'syscallNum' => 'getSyscallNum',
            'function' => 'getFunction',
            'module' => 'getModule',
            'extInfo' => 'getExtInfo'
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
        $this->container['readAddr'] = isset($data['readAddr']) ? $data['readAddr'] : null;
        $this->container['syscallNum'] = isset($data['syscallNum']) ? $data['syscallNum'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['extInfo'] = isset($data['extInfo']) ? $data['extInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['function']) && !preg_match("/^.*$/", $this->container['function'])) {
                $invalidProperties[] = "invalid value for 'function', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['module']) && !preg_match("/^.*$/", $this->container['module'])) {
                $invalidProperties[] = "invalid value for 'module', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['extInfo']) && !preg_match("/^.*$/", $this->container['extInfo'])) {
                $invalidProperties[] = "invalid value for 'extInfo', must be conform to the pattern /^.*$/.";
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
    * Gets readAddr
    *  **参数解释**： 地址 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getReadAddr()
    {
        return $this->container['readAddr'];
    }

    /**
    * Sets readAddr
    *
    * @param int|null $readAddr **参数解释**： 地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setReadAddr($readAddr)
    {
        $this->container['readAddr'] = $readAddr;
        return $this;
    }

    /**
    * Gets syscallNum
    *  **参数解释**： 系统调用编号 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSyscallNum()
    {
        return $this->container['syscallNum'];
    }

    /**
    * Sets syscallNum
    *
    * @param int|null $syscallNum **参数解释**： 系统调用编号 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSyscallNum($syscallNum)
    {
        $this->container['syscallNum'] = $syscallNum;
        return $this;
    }

    /**
    * Gets function
    *  **参数解释**： 系统函数 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function **参数解释**： 系统函数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets module
    *  **参数解释**： 内核模块 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param string|null $module **参数解释**： 内核模块 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets extInfo
    *  **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
    * Sets extInfo
    *
    * @param string|null $extInfo **参数解释**： 扩展信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;
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

