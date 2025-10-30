<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulAffectedStatisticsResponseInfoCceDisabledVulList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulAffectedStatisticsResponseInfo_cce_disabled_vul_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * operationDescription  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'vulName' => 'string',
            'vulId' => 'string',
            'operationDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * operationDescription  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'vulName' => null,
        'vulId' => null,
        'operationDescription' => null
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
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * operationDescription  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'operationDescription' => 'operation_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * operationDescription  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'operationDescription' => 'setOperationDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * operationDescription  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'operationDescription' => 'getOperationDescription'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['operationDescription'] = isset($data['operationDescription']) ? $data['operationDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operationDescription']) && (mb_strlen($this->container['operationDescription']) > 4096)) {
                $invalidProperties[] = "invalid value for 'operationDescription', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['operationDescription']) && (mb_strlen($this->container['operationDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'operationDescription', the character length must be bigger than or equal to 0.";
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
    * Gets hostName
    *  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机id **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets operationDescription
    *  **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @return string|null
    */
    public function getOperationDescription()
    {
        return $this->container['operationDescription'];
    }

    /**
    * Sets operationDescription
    *
    * @param string|null $operationDescription **参数解释**: 操作提示 **取值范围**: 字符长度0-4096
    *
    * @return $this
    */
    public function setOperationDescription($operationDescription)
    {
        $this->container['operationDescription'] = $operationDescription;
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

