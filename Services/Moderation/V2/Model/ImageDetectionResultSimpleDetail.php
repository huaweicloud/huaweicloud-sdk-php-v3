<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageDetectionResultSimpleDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageDetectionResultSimpleDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  置信度，取值范围 0-1。
    * label  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'float',
            'label' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  置信度，取值范围 0-1。
    * label  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => 'float',
        'label' => null
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
    * confidence  置信度，取值范围 0-1。
    * label  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'label' => 'label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  置信度，取值范围 0-1。
    * label  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'label' => 'setLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  置信度，取值范围 0-1。
    * label  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'label' => 'getLabel'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
    * Gets confidence
    *  置信度，取值范围 0-1。
    *
    * @return float|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float|null $confidence 置信度，取值范围 0-1。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets label
    *  每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 每个检测结果的标签化说明： terrorism：label为对应的涉政暴恐元素信息。 - 涉政暴恐场景当前支持label列表如下：   - normal：正常   - knife：刀   - gun：枪   - fire：火灾   - bloody ：血腥   - terrorist：暴恐组织及标志   - fascist：法西斯组织及标志   - cult：邪教组织及标志   - negative_politics ：涉政负面组织及标志   - negative_political_events：涉政负面事件及标志   - special_characters ：特殊文字   - kidnap：绑架   - corpse：尸体   - riot：暴乱事件   - parade ：游行示威   - sensitive_landmarks：敏感地标   - military_weapon：军事武器   - army：警察部队   - positive_politics：涉政正面组织及标志   - crowd：人群聚集 porn：label为对应的涉黄分类（涉黄、性感等）信息。 - 鉴黄场景当前支持label列表如下：   - normal：正常   - porn：色情   - sexy：性感
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
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

