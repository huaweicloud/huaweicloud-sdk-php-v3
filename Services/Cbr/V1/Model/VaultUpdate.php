<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billing  billing
    * name  存储库名称
    * autoBind  是否支持自动挂载
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    * smnNotify  发送smn通知开关
    * threshold  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billing' => '\HuaweiCloud\SDK\Cbr\V1\Model\BillingUpdate',
            'name' => 'string',
            'autoBind' => 'bool',
            'bindRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules',
            'autoExpand' => 'bool',
            'smnNotify' => 'bool',
            'threshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billing  billing
    * name  存储库名称
    * autoBind  是否支持自动挂载
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    * smnNotify  发送smn通知开关
    * threshold  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billing' => null,
        'name' => null,
        'autoBind' => null,
        'bindRules' => null,
        'autoExpand' => null,
        'smnNotify' => null,
        'threshold' => 'int32'
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
    * billing  billing
    * name  存储库名称
    * autoBind  是否支持自动挂载
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    * smnNotify  发送smn通知开关
    * threshold  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billing' => 'billing',
            'name' => 'name',
            'autoBind' => 'auto_bind',
            'bindRules' => 'bind_rules',
            'autoExpand' => 'auto_expand',
            'smnNotify' => 'smn_notify',
            'threshold' => 'threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billing  billing
    * name  存储库名称
    * autoBind  是否支持自动挂载
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    * smnNotify  发送smn通知开关
    * threshold  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @var string[]
    */
    protected static $setters = [
            'billing' => 'setBilling',
            'name' => 'setName',
            'autoBind' => 'setAutoBind',
            'bindRules' => 'setBindRules',
            'autoExpand' => 'setAutoExpand',
            'smnNotify' => 'setSmnNotify',
            'threshold' => 'setThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billing  billing
    * name  存储库名称
    * autoBind  是否支持自动挂载
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    * smnNotify  发送smn通知开关
    * threshold  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @var string[]
    */
    protected static $getters = [
            'billing' => 'getBilling',
            'name' => 'getName',
            'autoBind' => 'getAutoBind',
            'bindRules' => 'getBindRules',
            'autoExpand' => 'getAutoExpand',
            'smnNotify' => 'getSmnNotify',
            'threshold' => 'getThreshold'
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
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['autoBind'] = isset($data['autoBind']) ? $data['autoBind'] : null;
        $this->container['bindRules'] = isset($data['bindRules']) ? $data['bindRules'] : null;
        $this->container['autoExpand'] = isset($data['autoExpand']) ? $data['autoExpand'] : null;
        $this->container['smnNotify'] = isset($data['smnNotify']) ? $data['smnNotify'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 100)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 1.";
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
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BillingUpdate|null
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BillingUpdate|null $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets name
    *  存储库名称
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
    * @param string|null $name 存储库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets autoBind
    *  是否支持自动挂载
    *
    * @return bool|null
    */
    public function getAutoBind()
    {
        return $this->container['autoBind'];
    }

    /**
    * Sets autoBind
    *
    * @param bool|null $autoBind 是否支持自动挂载
    *
    * @return $this
    */
    public function setAutoBind($autoBind)
    {
        $this->container['autoBind'] = $autoBind;
        return $this;
    }

    /**
    * Gets bindRules
    *  bindRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null
    */
    public function getBindRules()
    {
        return $this->container['bindRules'];
    }

    /**
    * Sets bindRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null $bindRules bindRules
    *
    * @return $this
    */
    public function setBindRules($bindRules)
    {
        $this->container['bindRules'] = $bindRules;
        return $this;
    }

    /**
    * Gets autoExpand
    *  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @return bool|null
    */
    public function getAutoExpand()
    {
        return $this->container['autoExpand'];
    }

    /**
    * Sets autoExpand
    *
    * @param bool|null $autoExpand 是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @return $this
    */
    public function setAutoExpand($autoExpand)
    {
        $this->container['autoExpand'] = $autoExpand;
        return $this;
    }

    /**
    * Gets smnNotify
    *  发送smn通知开关
    *
    * @return bool|null
    */
    public function getSmnNotify()
    {
        return $this->container['smnNotify'];
    }

    /**
    * Sets smnNotify
    *
    * @param bool|null $smnNotify 发送smn通知开关
    *
    * @return $this
    */
    public function setSmnNotify($smnNotify)
    {
        $this->container['smnNotify'] = $smnNotify;
        return $this;
    }

    /**
    * Gets threshold
    *  存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 存储库容量阈值，存储库已用容量和总容量的百分比超过该值，若smn_notify为开，将发送相关通知。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
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

