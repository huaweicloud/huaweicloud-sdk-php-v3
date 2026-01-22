<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainSetVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainSetVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  **参数解释**： 域名组id **取值范围**： 不涉及
    * name  **参数解释**： 域名组名称 **取值范围**： 不涉及
    * description  **参数解释**： 域名组描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    * configStatus  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    * rules  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'refCount' => 'int',
            'domainSetType' => 'int',
            'configStatus' => 'int',
            'rules' => '\HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  **参数解释**： 域名组id **取值范围**： 不涉及
    * name  **参数解释**： 域名组名称 **取值范围**： 不涉及
    * description  **参数解释**： 域名组描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    * configStatus  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    * rules  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => null,
        'name' => null,
        'description' => null,
        'refCount' => 'int32',
        'domainSetType' => 'int32',
        'configStatus' => 'int32',
        'rules' => null
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
    * setId  **参数解释**： 域名组id **取值范围**： 不涉及
    * name  **参数解释**： 域名组名称 **取值范围**： 不涉及
    * description  **参数解释**： 域名组描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    * configStatus  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    * rules  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'set_id',
            'name' => 'name',
            'description' => 'description',
            'refCount' => 'ref_count',
            'domainSetType' => 'domain_set_type',
            'configStatus' => 'config_status',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  **参数解释**： 域名组id **取值范围**： 不涉及
    * name  **参数解释**： 域名组名称 **取值范围**： 不涉及
    * description  **参数解释**： 域名组描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    * configStatus  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    * rules  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'name' => 'setName',
            'description' => 'setDescription',
            'refCount' => 'setRefCount',
            'domainSetType' => 'setDomainSetType',
            'configStatus' => 'setConfigStatus',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  **参数解释**： 域名组id **取值范围**： 不涉及
    * name  **参数解释**： 域名组名称 **取值范围**： 不涉及
    * description  **参数解释**： 域名组描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    * configStatus  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    * rules  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'name' => 'getName',
            'description' => 'getDescription',
            'refCount' => 'getRefCount',
            'domainSetType' => 'getDomainSetType',
            'configStatus' => 'getConfigStatus',
            'rules' => 'getRules'
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
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['refCount'] = isset($data['refCount']) ? $data['refCount'] : null;
        $this->container['domainSetType'] = isset($data['domainSetType']) ? $data['domainSetType'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets setId
    *  **参数解释**： 域名组id **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string|null $setId **参数解释**： 域名组id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 域名组名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 域名组名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 域名组描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 域名组描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets refCount
    *  **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRefCount()
    {
        return $this->container['refCount'];
    }

    /**
    * Sets refCount
    *
    * @param int|null $refCount **参数解释**： 域名组被规则引用次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRefCount($refCount)
    {
        $this->container['refCount'] = $refCount;
        return $this;
    }

    /**
    * Gets domainSetType
    *  **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    *
    * @return int|null
    */
    public function getDomainSetType()
    {
        return $this->container['domainSetType'];
    }

    /**
    * Sets domainSetType
    *
    * @param int|null $domainSetType **参数解释**： 域名组类型 **取值范围**： - 0：应用域名组 - 1：网络域名组
    *
    * @return $this
    */
    public function setDomainSetType($domainSetType)
    {
        $this->container['domainSetType'] = $domainSetType;
        return $this;
    }

    /**
    * Gets configStatus
    *  **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    *
    * @return int|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param int|null $configStatus **参数解释**： 配置状态 **取值范围**： - -1：未配置态 - 0：配置失败 - 1：配置成功 - 2：配置中 - 3：正常 - 4：配置异常
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]|null $rules **参数解释**： 使用规则id列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

