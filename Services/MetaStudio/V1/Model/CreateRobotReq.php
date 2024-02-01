<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRobotReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRobotReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    * concurrency  对话的并发数
    * language  language
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'appType' => 'int',
            'concurrency' => 'int',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'huaweiEiCbs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HuaweiEiCbs',
            'iflytekAiuiConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekAiuiConfig',
            'iflytekSpark' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekSpark',
            'thirdPartyModelConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ThirdPartyModelConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    * concurrency  对话的并发数
    * language  language
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'appType' => null,
        'concurrency' => null,
        'language' => null,
        'huaweiEiCbs' => null,
        'iflytekAiuiConfig' => null,
        'iflytekSpark' => null,
        'thirdPartyModelConfig' => null
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
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    * concurrency  对话的并发数
    * language  language
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'appType' => 'app_type',
            'concurrency' => 'concurrency',
            'language' => 'language',
            'huaweiEiCbs' => 'huawei_ei_cbs',
            'iflytekAiuiConfig' => 'iflytek_aiui_config',
            'iflytekSpark' => 'iflytek_spark',
            'thirdPartyModelConfig' => 'third_party_model_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    * concurrency  对话的并发数
    * language  language
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'appType' => 'setAppType',
            'concurrency' => 'setConcurrency',
            'language' => 'setLanguage',
            'huaweiEiCbs' => 'setHuaweiEiCbs',
            'iflytekAiuiConfig' => 'setIflytekAiuiConfig',
            'iflytekSpark' => 'setIflytekSpark',
            'thirdPartyModelConfig' => 'setThirdPartyModelConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名称。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    * concurrency  对话的并发数
    * language  language
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'appType' => 'getAppType',
            'concurrency' => 'getConcurrency',
            'language' => 'getLanguage',
            'huaweiEiCbs' => 'getHuaweiEiCbs',
            'iflytekAiuiConfig' => 'getIflytekAiuiConfig',
            'iflytekSpark' => 'getIflytekSpark',
            'thirdPartyModelConfig' => 'getThirdPartyModelConfig'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['huaweiEiCbs'] = isset($data['huaweiEiCbs']) ? $data['huaweiEiCbs'] : null;
        $this->container['iflytekAiuiConfig'] = isset($data['iflytekAiuiConfig']) ? $data['iflytekAiuiConfig'] : null;
        $this->container['iflytekSpark'] = isset($data['iflytekSpark']) ? $data['iflytekSpark'] : null;
        $this->container['thirdPartyModelConfig'] = isset($data['thirdPartyModelConfig']) ? $data['thirdPartyModelConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appType'] === null) {
            $invalidProperties[] = "'appType' can't be null";
        }
            if (($this->container['appType'] > 32)) {
                $invalidProperties[] = "invalid value for 'appType', must be smaller than or equal to 32.";
            }
            if (($this->container['appType'] < 0)) {
                $invalidProperties[] = "invalid value for 'appType', must be bigger than or equal to 0.";
            }
        if ($this->container['concurrency'] === null) {
            $invalidProperties[] = "'concurrency' can't be null";
        }
            if (($this->container['concurrency'] > 512)) {
                $invalidProperties[] = "invalid value for 'concurrency', must be smaller than or equal to 512.";
            }
            if (($this->container['concurrency'] < 1)) {
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 应用名称。
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
    *  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
    *
    * @return int
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param int $appType 对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型
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
    * @return int
    */
    public function getConcurrency()
    {
        return $this->container['concurrency'];
    }

    /**
    * Sets concurrency
    *
    * @param int $concurrency 对话的并发数
    *
    * @return $this
    */
    public function setConcurrency($concurrency)
    {
        $this->container['concurrency'] = $concurrency;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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
    * Gets thirdPartyModelConfig
    *  thirdPartyModelConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ThirdPartyModelConfig|null
    */
    public function getThirdPartyModelConfig()
    {
        return $this->container['thirdPartyModelConfig'];
    }

    /**
    * Sets thirdPartyModelConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ThirdPartyModelConfig|null $thirdPartyModelConfig thirdPartyModelConfig
    *
    * @return $this
    */
    public function setThirdPartyModelConfig($thirdPartyModelConfig)
    {
        $this->container['thirdPartyModelConfig'] = $thirdPartyModelConfig;
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

