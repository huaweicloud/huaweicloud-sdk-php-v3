<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TtscVoiceModelAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TtscVoiceModelAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sex' => 'string',
            'externalVoiceMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TtscExternalVoiceAssetMeta',
            'language' => 'string',
            'speedRatio' => 'float',
            'volumeRatio' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sex' => null,
        'externalVoiceMeta' => null,
        'language' => null,
        'speedRatio' => 'float',
        'volumeRatio' => 'float'
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
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sex' => 'sex',
            'externalVoiceMeta' => 'external_voice_meta',
            'language' => 'language',
            'speedRatio' => 'speed_ratio',
            'volumeRatio' => 'volume_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $setters = [
            'sex' => 'setSex',
            'externalVoiceMeta' => 'setExternalVoiceMeta',
            'language' => 'setLanguage',
            'speedRatio' => 'setSpeedRatio',
            'volumeRatio' => 'setVolumeRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $getters = [
            'sex' => 'getSex',
            'externalVoiceMeta' => 'getExternalVoiceMeta',
            'language' => 'getLanguage',
            'speedRatio' => 'getSpeedRatio',
            'volumeRatio' => 'getVolumeRatio'
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
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['externalVoiceMeta'] = isset($data['externalVoiceMeta']) ? $data['externalVoiceMeta'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['speedRatio'] = isset($data['speedRatio']) ? $data['speedRatio'] : null;
        $this->container['volumeRatio'] = isset($data['volumeRatio']) ? $data['volumeRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 16)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['speedRatio']) && ($this->container['speedRatio'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'speedRatio', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['speedRatio']) && ($this->container['speedRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedRatio', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeRatio']) && ($this->container['volumeRatio'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'volumeRatio', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['volumeRatio']) && ($this->container['volumeRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'volumeRatio', must be bigger than or equal to 0.";
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
    * Gets sex
    *  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets externalVoiceMeta
    *  externalVoiceMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscExternalVoiceAssetMeta|null
    */
    public function getExternalVoiceMeta()
    {
        return $this->container['externalVoiceMeta'];
    }

    /**
    * Sets externalVoiceMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscExternalVoiceAssetMeta|null $externalVoiceMeta externalVoiceMeta
    *
    * @return $this
    */
    public function setExternalVoiceMeta($externalVoiceMeta)
    {
        $this->container['externalVoiceMeta'] = $externalVoiceMeta;
        return $this;
    }

    /**
    * Gets language
    *  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets speedRatio
    *  语速缩放比例
    *
    * @return float|null
    */
    public function getSpeedRatio()
    {
        return $this->container['speedRatio'];
    }

    /**
    * Sets speedRatio
    *
    * @param float|null $speedRatio 语速缩放比例
    *
    * @return $this
    */
    public function setSpeedRatio($speedRatio)
    {
        $this->container['speedRatio'] = $speedRatio;
        return $this;
    }

    /**
    * Gets volumeRatio
    *  音量缩放比例
    *
    * @return float|null
    */
    public function getVolumeRatio()
    {
        return $this->container['volumeRatio'];
    }

    /**
    * Sets volumeRatio
    *
    * @param float|null $volumeRatio 音量缩放比例
    *
    * @return $this
    */
    public function setVolumeRatio($volumeRatio)
    {
        $this->container['volumeRatio'] = $volumeRatio;
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

