<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginControlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginControlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * operateAll  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginCode' => 'string',
            'operateAll' => 'bool',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * operateAll  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginCode' => null,
        'operateAll' => null,
        'hostIdList' => null
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
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * operateAll  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginCode' => 'plugin_code',
            'operateAll' => 'operate_all',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * operateAll  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginCode' => 'setPluginCode',
            'operateAll' => 'setOperateAll',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * operateAll  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginCode' => 'getPluginCode',
            'operateAll' => 'getOperateAll',
            'hostIdList' => 'getHostIdList'
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
        $this->container['pluginCode'] = isset($data['pluginCode']) ? $data['pluginCode'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pluginCode'] === null) {
            $invalidProperties[] = "'pluginCode' can't be null";
        }
            if ((mb_strlen($this->container['pluginCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'pluginCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['pluginCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]*$/", $this->container['pluginCode'])) {
                $invalidProperties[] = "invalid value for 'pluginCode', must be conform to the pattern /^[\\w-]*$/.";
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
    * Gets pluginCode
    *  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPluginCode()
    {
        return $this->container['pluginCode'];
    }

    /**
    * Sets pluginCode
    *
    * @param string $pluginCode **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPluginCode($pluginCode)
    {
        $this->container['pluginCode'] = $pluginCode;
        return $this;
    }

    /**
    * Gets operateAll
    *  **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll **参数解释**： 是否是全量操作，优先级高于host_id_list，若取值为true且host_id_list不为空，仍执行全量操作 **约束限制**: 不涉及 **取值范围**: - true：全量操作，启动/停止所有符合条件的插件 - false: 非全量操作，仅对host_id_list内服务器执行启动/停止插件操作 **默认取值**: false
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

