<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeAppWhitelistPolicyProcessStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeAppWhitelistPolicyProcessStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    * processHashList  进程hash列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processStatus' => 'string',
            'processHashList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    * processHashList  进程hash列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processStatus' => null,
        'processHashList' => null
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
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    * processHashList  进程hash列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processStatus' => 'process_status',
            'processHashList' => 'process_hash_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    * processHashList  进程hash列表
    *
    * @var string[]
    */
    protected static $setters = [
            'processStatus' => 'setProcessStatus',
            'processHashList' => 'setProcessHashList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processStatus  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    * processHashList  进程hash列表
    *
    * @var string[]
    */
    protected static $getters = [
            'processStatus' => 'getProcessStatus',
            'processHashList' => 'getProcessHashList'
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
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processHashList'] = isset($data['processHashList']) ? $data['processHashList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['processStatus'] === null) {
            $invalidProperties[] = "'processStatus' can't be null";
        }
            if ((mb_strlen($this->container['processStatus']) > 20)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['processStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['processHashList'] === null) {
            $invalidProperties[] = "'processHashList' can't be null";
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
    * Gets processStatus
    *  **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string $processStatus **参数解释**： 进程可信状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：恶意 - unknown：未知  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets processHashList
    *  进程hash列表
    *
    * @return string[]
    */
    public function getProcessHashList()
    {
        return $this->container['processHashList'];
    }

    /**
    * Sets processHashList
    *
    * @param string[] $processHashList 进程hash列表
    *
    * @return $this
    */
    public function setProcessHashList($processHashList)
    {
        $this->container['processHashList'] = $processHashList;
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

