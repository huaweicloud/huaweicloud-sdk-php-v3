<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Severity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Severity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * label  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    * normalizeScore  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    * originalScore  严重性原始评分，指在数据源产品中的评分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'label' => 'string',
            'normalizeScore' => 'int',
            'originalScore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * label  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    * normalizeScore  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    * originalScore  严重性原始评分，指在数据源产品中的评分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'label' => null,
        'normalizeScore' => null,
        'originalScore' => null
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
    * label  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    * normalizeScore  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    * originalScore  严重性原始评分，指在数据源产品中的评分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'label' => 'label',
            'normalizeScore' => 'normalize_score',
            'originalScore' => 'original_score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * label  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    * normalizeScore  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    * originalScore  严重性原始评分，指在数据源产品中的评分。
    *
    * @var string[]
    */
    protected static $setters = [
            'label' => 'setLabel',
            'normalizeScore' => 'setNormalizeScore',
            'originalScore' => 'setOriginalScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * label  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    * normalizeScore  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    * originalScore  严重性原始评分，指在数据源产品中的评分。
    *
    * @var string[]
    */
    protected static $getters = [
            'label' => 'getLabel',
            'normalizeScore' => 'getNormalizeScore',
            'originalScore' => 'getOriginalScore'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['normalizeScore'] = isset($data['normalizeScore']) ? $data['normalizeScore'] : null;
        $this->container['originalScore'] = isset($data['originalScore']) ? $data['originalScore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
            if ((mb_strlen($this->container['label']) > 512)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['label']) < 1)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['normalizeScore']) && ($this->container['normalizeScore'] > 100)) {
                $invalidProperties[] = "invalid value for 'normalizeScore', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['normalizeScore']) && ($this->container['normalizeScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'normalizeScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['originalScore']) && ($this->container['originalScore'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'originalScore', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['originalScore']) && ($this->container['originalScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'originalScore', must be bigger than or equal to 0.";
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
    * Gets label
    *  严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    *
    * @return string
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string $label 严重性等级取值范围：TIPS、LOW、MEDIUM、HIGH、FATAL。 TIPS：未发现任何问题。 LOW：无需针对问题执行任何操作。 MEDIUM：问题需要处理，但不紧急。 HIGH：问题必须优先处理。 FATAL：问题必须立即处理，以防止产生进一步的损害。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets normalizeScore
    *  严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    *
    * @return int|null
    */
    public function getNormalizeScore()
    {
        return $this->container['normalizeScore'];
    }

    /**
    * Sets normalizeScore
    *
    * @param int|null $normalizeScore 严重性评分取值范围：0-100； 与严重性等级的对应关系： TIPS 0； LOW 1-39； MEDIUM 40-69； HIGH 70-89； FATAL 90-100。
    *
    * @return $this
    */
    public function setNormalizeScore($normalizeScore)
    {
        $this->container['normalizeScore'] = $normalizeScore;
        return $this;
    }

    /**
    * Gets originalScore
    *  严重性原始评分，指在数据源产品中的评分。
    *
    * @return int|null
    */
    public function getOriginalScore()
    {
        return $this->container['originalScore'];
    }

    /**
    * Sets originalScore
    *
    * @param int|null $originalScore 严重性原始评分，指在数据源产品中的评分。
    *
    * @return $this
    */
    public function setOriginalScore($originalScore)
    {
        $this->container['originalScore'] = $originalScore;
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

