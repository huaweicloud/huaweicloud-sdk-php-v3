<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectableResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectableResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancerName  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * loadbalancerId  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * projectId  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * listeners  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * eips  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancerName' => 'string',
            'loadbalancerId' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Waf\V1\Model\Listener[]',
            'eips' => '\HuaweiCloud\SDK\Waf\V1\Model\EipInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancerName  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * loadbalancerId  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * projectId  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * listeners  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * eips  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancerName' => null,
        'loadbalancerId' => null,
        'domainId' => null,
        'projectId' => null,
        'listeners' => null,
        'eips' => null
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
    * loadbalancerName  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * loadbalancerId  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * projectId  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * listeners  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * eips  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancerName' => 'loadbalancer_name',
            'loadbalancerId' => 'loadbalancer_id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'listeners' => 'listeners',
            'eips' => 'eips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancerName  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * loadbalancerId  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * projectId  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * listeners  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * eips  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancerName' => 'setLoadbalancerName',
            'loadbalancerId' => 'setLoadbalancerId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'listeners' => 'setListeners',
            'eips' => 'setEips'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancerName  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * loadbalancerId  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * projectId  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * listeners  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * eips  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancerName' => 'getLoadbalancerName',
            'loadbalancerId' => 'getLoadbalancerId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'listeners' => 'getListeners',
            'eips' => 'getEips'
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
        $this->container['loadbalancerName'] = isset($data['loadbalancerName']) ? $data['loadbalancerName'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['eips'] = isset($data['eips']) ? $data['eips'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['loadbalancerName']) && (mb_strlen($this->container['loadbalancerName']) > 255)) {
                $invalidProperties[] = "invalid value for 'loadbalancerName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['loadbalancerName']) && (mb_strlen($this->container['loadbalancerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'loadbalancerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    * Gets loadbalancerName
    *  **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLoadbalancerName()
    {
        return $this->container['loadbalancerName'];
    }

    /**
    * Sets loadbalancerName
    *
    * @param string|null $loadbalancerName **参数解释：** 负载均衡器名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLoadbalancerName($loadbalancerName)
    {
        $this->container['loadbalancerName'] = $loadbalancerName;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId **参数解释：** 负载均衡器ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 负载均衡器所属的账号ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 负载均衡器所在的项目ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets listeners
    *  **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\Listener[]|null
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\Listener[]|null $listeners **参数解释：** 当前ELB所关联的监听器列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets eips
    *  **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\EipInfo[]|null
    */
    public function getEips()
    {
        return $this->container['eips'];
    }

    /**
    * Sets eips
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\EipInfo[]|null $eips **参数解释：** 负载均衡器绑定的EIP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEips($eips)
    {
        $this->container['eips'] = $eips;
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

