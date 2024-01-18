<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRobotReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRobotReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    * concurrency  对话的并发数
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'appType' => 'int',
            'concurrency' => 'int',
            'huaweiEiCbs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HuaweiEiCbs',
            'iflytekAiuiConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekAiuiConfig',
            'iflytekSpark' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekSpark'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    * concurrency  对话的并发数
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'appType' => null,
        'concurrency' => null,
        'huaweiEiCbs' => null,
        'iflytekAiuiConfig' => null,
        'iflytekSpark' => null
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
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    * concurrency  对话的并发数
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'appType' => 'app_type',
            'concurrency' => 'concurrency',
            'huaweiEiCbs' => 'huawei_ei_cbs',
            'iflytekAiuiConfig' => 'iflytek_aiui_config',
            'iflytekSpark' => 'iflytek_spark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    * concurrency  对话的并发数
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'appType' => 'setAppType',
            'concurrency' => 'setConcurrency',
            'huaweiEiCbs' => 'setHuaweiEiCbs',
            'iflytekAiuiConfig' => 'setIflytekAiuiConfig',
            'iflytekSpark' => 'setIflytekSpark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    * concurrency  对话的并发数
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'appType' => 'getAppType',
            'concurrency' => 'getConcurrency',
            'huaweiEiCbs' => 'getHuaweiEiCbs',
            'iflytekAiuiConfig' => 'getIflytekAiuiConfig',
            'iflytekSpark' => 'getIflytekSpark'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['concurrency'] = isset($data['concurrency']) ? $data['concurrency'] : null;
        $this->container['huaweiEiCbs'] = isset($data['huaweiEiCbs']) ? $data['huaweiEiCbs'] : null;
        $this->container['iflytekAiuiConfig'] = isset($data['iflytekAiuiConfig']) ? $data['iflytekAiuiConfig'] : null;
        $this->container['iflytekSpark'] = isset($data['iflytekSpark']) ? $data['iflytekSpark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 30)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appType']) && ($this->container['appType'] > 32)) {
                $invalidProperties[] = "invalid value for 'appType', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appType']) && ($this->container['appType'] < 0)) {
                $invalidProperties[] = "invalid value for 'appType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['concurrency']) && ($this->container['concurrency'] > 512)) {
                $invalidProperties[] = "invalid value for 'concurrency', must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['concurrency']) && ($this->container['concurrency'] < 1)) {
                $invalidProperties[] = "invalid value for 'concurrency', must be bigger than or equal to 1.";
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
    * Gets name
    *  应用名称。
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
    * @param string|null $name 应用名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets appType
    *  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    *
    * @return int|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param int|null $appType 对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets concurrency
    *  对话的并发数
    *
    * @return int|null
    */
    public function getConcurrency()
    {
        return $this->container['concurrency'];
    }

    /**
    * Sets concurrency
    *
    * @param int|null $concurrency 对话的并发数
    *
    * @return $this
    */
    public function setConcurrency($concurrency)
    {
        $this->container['concurrency'] = $concurrency;
        return $this;
    }

    /**
    * Gets huaweiEiCbs
    *  huaweiEiCbs
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HuaweiEiCbs|null
    */
    public function getHuaweiEiCbs()
    {
        return $this->container['huaweiEiCbs'];
    }

    /**
    * Sets huaweiEiCbs
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HuaweiEiCbs|null $huaweiEiCbs huaweiEiCbs
    *
    * @return $this
    */
    public function setHuaweiEiCbs($huaweiEiCbs)
    {
        $this->container['huaweiEiCbs'] = $huaweiEiCbs;
        return $this;
    }

    /**
    * Gets iflytekAiuiConfig
    *  iflytekAiuiConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekAiuiConfig|null
    */
    public function getIflytekAiuiConfig()
    {
        return $this->container['iflytekAiuiConfig'];
    }

    /**
    * Sets iflytekAiuiConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekAiuiConfig|null $iflytekAiuiConfig iflytekAiuiConfig
    *
    * @return $this
    */
    public function setIflytekAiuiConfig($iflytekAiuiConfig)
    {
        $this->container['iflytekAiuiConfig'] = $iflytekAiuiConfig;
        return $this;
    }

    /**
    * Gets iflytekSpark
    *  iflytekSpark
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekSpark|null
    */
    public function getIflytekSpark()
    {
        return $this->container['iflytekSpark'];
    }

    /**
    * Sets iflytekSpark
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekSpark|null $iflytekSpark iflytekSpark
    *
    * @return $this
    */
    public function setIflytekSpark($iflytekSpark)
    {
        $this->container['iflytekSpark'] = $iflytekSpark;
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

