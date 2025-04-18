<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateRobotReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateRobotReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    * mobvoiConfig  mobvoiConfig
    * wiseBrainConfig  wiseBrainConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appType' => 'int',
            'huaweiEiCbs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HuaweiEiCbs',
            'iflytekAiuiConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekAiuiConfig',
            'iflytekSpark' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\IflytekSpark',
            'thirdPartyModelConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ThirdPartyModelConfig',
            'mobvoiConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiConfig',
            'wiseBrainConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\WiseBrainConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    * mobvoiConfig  mobvoiConfig
    * wiseBrainConfig  wiseBrainConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appType' => null,
        'huaweiEiCbs' => null,
        'iflytekAiuiConfig' => null,
        'iflytekSpark' => null,
        'thirdPartyModelConfig' => null,
        'mobvoiConfig' => null,
        'wiseBrainConfig' => null
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
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    * mobvoiConfig  mobvoiConfig
    * wiseBrainConfig  wiseBrainConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appType' => 'app_type',
            'huaweiEiCbs' => 'huawei_ei_cbs',
            'iflytekAiuiConfig' => 'iflytek_aiui_config',
            'iflytekSpark' => 'iflytek_spark',
            'thirdPartyModelConfig' => 'third_party_model_config',
            'mobvoiConfig' => 'mobvoi_config',
            'wiseBrainConfig' => 'wise_brain_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    * mobvoiConfig  mobvoiConfig
    * wiseBrainConfig  wiseBrainConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'appType' => 'setAppType',
            'huaweiEiCbs' => 'setHuaweiEiCbs',
            'iflytekAiuiConfig' => 'setIflytekAiuiConfig',
            'iflytekSpark' => 'setIflytekSpark',
            'thirdPartyModelConfig' => 'setThirdPartyModelConfig',
            'mobvoiConfig' => 'setMobvoiConfig',
            'wiseBrainConfig' => 'setWiseBrainConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    * huaweiEiCbs  huaweiEiCbs
    * iflytekAiuiConfig  iflytekAiuiConfig
    * iflytekSpark  iflytekSpark
    * thirdPartyModelConfig  thirdPartyModelConfig
    * mobvoiConfig  mobvoiConfig
    * wiseBrainConfig  wiseBrainConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'appType' => 'getAppType',
            'huaweiEiCbs' => 'getHuaweiEiCbs',
            'iflytekAiuiConfig' => 'getIflytekAiuiConfig',
            'iflytekSpark' => 'getIflytekSpark',
            'thirdPartyModelConfig' => 'getThirdPartyModelConfig',
            'mobvoiConfig' => 'getMobvoiConfig',
            'wiseBrainConfig' => 'getWiseBrainConfig'
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
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['huaweiEiCbs'] = isset($data['huaweiEiCbs']) ? $data['huaweiEiCbs'] : null;
        $this->container['iflytekAiuiConfig'] = isset($data['iflytekAiuiConfig']) ? $data['iflytekAiuiConfig'] : null;
        $this->container['iflytekSpark'] = isset($data['iflytekSpark']) ? $data['iflytekSpark'] : null;
        $this->container['thirdPartyModelConfig'] = isset($data['thirdPartyModelConfig']) ? $data['thirdPartyModelConfig'] : null;
        $this->container['mobvoiConfig'] = isset($data['mobvoiConfig']) ? $data['mobvoiConfig'] : null;
        $this->container['wiseBrainConfig'] = isset($data['wiseBrainConfig']) ? $data['wiseBrainConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appType'] === null) {
            $invalidProperties[] = "'appType' can't be null";
        }
            if (($this->container['appType'] > 32)) {
                $invalidProperties[] = "invalid value for 'appType', must be smaller than or equal to 32.";
            }
            if (($this->container['appType'] < 0)) {
                $invalidProperties[] = "invalid value for 'appType', must be bigger than or equal to 0.";
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
    * Gets appType
    *  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
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
    * @param int $appType 对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；6：第三方语言模型；7：交互助手；8：奇妙问
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
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
    * Gets mobvoiConfig
    *  mobvoiConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiConfig|null
    */
    public function getMobvoiConfig()
    {
        return $this->container['mobvoiConfig'];
    }

    /**
    * Sets mobvoiConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiConfig|null $mobvoiConfig mobvoiConfig
    *
    * @return $this
    */
    public function setMobvoiConfig($mobvoiConfig)
    {
        $this->container['mobvoiConfig'] = $mobvoiConfig;
        return $this;
    }

    /**
    * Gets wiseBrainConfig
    *  wiseBrainConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\WiseBrainConfig|null
    */
    public function getWiseBrainConfig()
    {
        return $this->container['wiseBrainConfig'];
    }

    /**
    * Sets wiseBrainConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\WiseBrainConfig|null $wiseBrainConfig wiseBrainConfig
    *
    * @return $this
    */
    public function setWiseBrainConfig($wiseBrainConfig)
    {
        $this->container['wiseBrainConfig'] = $wiseBrainConfig;
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

