<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGlobalAssetScanTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGlobalAssetScanTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIds  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * serverGroup  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * allHosts  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIds' => 'string[]',
            'serverGroup' => 'string[]',
            'allHosts' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIds  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * serverGroup  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * allHosts  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIds' => null,
        'serverGroup' => null,
        'allHosts' => null
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
    * hostIds  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * serverGroup  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * allHosts  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIds' => 'host_ids',
            'serverGroup' => 'server_group',
            'allHosts' => 'all_hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIds  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * serverGroup  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * allHosts  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIds' => 'setHostIds',
            'serverGroup' => 'setServerGroup',
            'allHosts' => 'setAllHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIds  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * serverGroup  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    * allHosts  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIds' => 'getHostIds',
            'serverGroup' => 'getServerGroup',
            'allHosts' => 'getAllHosts'
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
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['serverGroup'] = isset($data['serverGroup']) ? $data['serverGroup'] : null;
        $this->container['allHosts'] = isset($data['allHosts']) ? $data['allHosts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets hostIds
    *  **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**: 下发任务的主机列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets serverGroup
    *  **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getServerGroup()
    {
        return $this->container['serverGroup'];
    }

    /**
    * Sets serverGroup
    *
    * @param string[]|null $serverGroup **参数解释**: 下发任务的主机组列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setServerGroup($serverGroup)
    {
        $this->container['serverGroup'] = $serverGroup;
        return $this;
    }

    /**
    * Gets allHosts
    *  **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getAllHosts()
    {
        return $this->container['allHosts'];
    }

    /**
    * Sets allHosts
    *
    * @param bool|null $allHosts **参数解释**: 下发全部主机的扫描 **约束限制**: 不涉及 **取值范围**: - true：扫描全部主机 - false：不扫描全部主机 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAllHosts($allHosts)
    {
        $this->container['allHosts'] = $allHosts;
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

