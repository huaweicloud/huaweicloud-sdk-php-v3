<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchRaspRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchRaspRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIdList  HostId list
    * appStatus  应用防护开关状态
    * appType  应用防护类型
    * policyId  防护策略ID
    * autoAttach  动态防护开关状态
    * raspPortList  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIdList' => 'string[]',
            'appStatus' => 'bool',
            'appType' => 'string',
            'policyId' => 'string',
            'autoAttach' => 'bool',
            'raspPortList' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIdList  HostId list
    * appStatus  应用防护开关状态
    * appType  应用防护类型
    * policyId  防护策略ID
    * autoAttach  动态防护开关状态
    * raspPortList  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIdList' => null,
        'appStatus' => null,
        'appType' => null,
        'policyId' => null,
        'autoAttach' => null,
        'raspPortList' => null
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
    * hostIdList  HostId list
    * appStatus  应用防护开关状态
    * appType  应用防护类型
    * policyId  防护策略ID
    * autoAttach  动态防护开关状态
    * raspPortList  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIdList' => 'host_id_list',
            'appStatus' => 'app_status',
            'appType' => 'app_type',
            'policyId' => 'policy_id',
            'autoAttach' => 'auto_attach',
            'raspPortList' => 'rasp_port_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIdList  HostId list
    * appStatus  应用防护开关状态
    * appType  应用防护类型
    * policyId  防护策略ID
    * autoAttach  动态防护开关状态
    * raspPortList  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIdList' => 'setHostIdList',
            'appStatus' => 'setAppStatus',
            'appType' => 'setAppType',
            'policyId' => 'setPolicyId',
            'autoAttach' => 'setAutoAttach',
            'raspPortList' => 'setRaspPortList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIdList  HostId list
    * appStatus  应用防护开关状态
    * appType  应用防护类型
    * policyId  防护策略ID
    * autoAttach  动态防护开关状态
    * raspPortList  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIdList' => 'getHostIdList',
            'appStatus' => 'getAppStatus',
            'appType' => 'getAppType',
            'policyId' => 'getPolicyId',
            'autoAttach' => 'getAutoAttach',
            'raspPortList' => 'getRaspPortList'
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
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['appStatus'] = isset($data['appStatus']) ? $data['appStatus'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['autoAttach'] = isset($data['autoAttach']) ? $data['autoAttach'] : null;
        $this->container['raspPortList'] = isset($data['raspPortList']) ? $data['raspPortList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
        }
        if ($this->container['appStatus'] === null) {
            $invalidProperties[] = "'appStatus' can't be null";
        }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 128)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
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
    * Gets hostIdList
    *  HostId list
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList HostId list
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets appStatus
    *  应用防护开关状态
    *
    * @return bool
    */
    public function getAppStatus()
    {
        return $this->container['appStatus'];
    }

    /**
    * Sets appStatus
    *
    * @param bool $appStatus 应用防护开关状态
    *
    * @return $this
    */
    public function setAppStatus($appStatus)
    {
        $this->container['appStatus'] = $appStatus;
        return $this;
    }

    /**
    * Gets appType
    *  应用防护类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用防护类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets policyId
    *  防护策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 防护策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets autoAttach
    *  动态防护开关状态
    *
    * @return bool|null
    */
    public function getAutoAttach()
    {
        return $this->container['autoAttach'];
    }

    /**
    * Sets autoAttach
    *
    * @param bool|null $autoAttach 动态防护开关状态
    *
    * @return $this
    */
    public function setAutoAttach($autoAttach)
    {
        $this->container['autoAttach'] = $autoAttach;
        return $this;
    }

    /**
    * Gets raspPortList
    *  RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @return int[]|null
    */
    public function getRaspPortList()
    {
        return $this->container['raspPortList'];
    }

    /**
    * Sets raspPortList
    *
    * @param int[]|null $raspPortList RASP端口列表，列表元素与host_id_list对应，app_status为true时支持生效
    *
    * @return $this
    */
    public function setRaspPortList($raspPortList)
    {
        $this->container['raspPortList'] = $raspPortList;
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

