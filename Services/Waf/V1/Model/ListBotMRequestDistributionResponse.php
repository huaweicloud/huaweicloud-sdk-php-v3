<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBotMRequestDistributionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBotMRequestDistributionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * normalBucket  normalBucket
    * botClassificationBucket  botClassificationBucket
    * actionBucket  actionBucket
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'normalBucket' => '\HuaweiCloud\SDK\Waf\V1\Model\BotRequestDistributionsNormalBucket',
            'botClassificationBucket' => '\HuaweiCloud\SDK\Waf\V1\Model\BotTypeDistributions',
            'actionBucket' => '\HuaweiCloud\SDK\Waf\V1\Model\ActionDistributions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * normalBucket  normalBucket
    * botClassificationBucket  botClassificationBucket
    * actionBucket  actionBucket
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'normalBucket' => null,
        'botClassificationBucket' => null,
        'actionBucket' => null
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
    * normalBucket  normalBucket
    * botClassificationBucket  botClassificationBucket
    * actionBucket  actionBucket
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'normalBucket' => 'normal_bucket',
            'botClassificationBucket' => 'bot_classification_bucket',
            'actionBucket' => 'action_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * normalBucket  normalBucket
    * botClassificationBucket  botClassificationBucket
    * actionBucket  actionBucket
    *
    * @var string[]
    */
    protected static $setters = [
            'normalBucket' => 'setNormalBucket',
            'botClassificationBucket' => 'setBotClassificationBucket',
            'actionBucket' => 'setActionBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * normalBucket  normalBucket
    * botClassificationBucket  botClassificationBucket
    * actionBucket  actionBucket
    *
    * @var string[]
    */
    protected static $getters = [
            'normalBucket' => 'getNormalBucket',
            'botClassificationBucket' => 'getBotClassificationBucket',
            'actionBucket' => 'getActionBucket'
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
        $this->container['normalBucket'] = isset($data['normalBucket']) ? $data['normalBucket'] : null;
        $this->container['botClassificationBucket'] = isset($data['botClassificationBucket']) ? $data['botClassificationBucket'] : null;
        $this->container['actionBucket'] = isset($data['actionBucket']) ? $data['actionBucket'] : null;
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
    * Gets normalBucket
    *  normalBucket
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotRequestDistributionsNormalBucket|null
    */
    public function getNormalBucket()
    {
        return $this->container['normalBucket'];
    }

    /**
    * Sets normalBucket
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotRequestDistributionsNormalBucket|null $normalBucket normalBucket
    *
    * @return $this
    */
    public function setNormalBucket($normalBucket)
    {
        $this->container['normalBucket'] = $normalBucket;
        return $this;
    }

    /**
    * Gets botClassificationBucket
    *  botClassificationBucket
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotTypeDistributions|null
    */
    public function getBotClassificationBucket()
    {
        return $this->container['botClassificationBucket'];
    }

    /**
    * Sets botClassificationBucket
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotTypeDistributions|null $botClassificationBucket botClassificationBucket
    *
    * @return $this
    */
    public function setBotClassificationBucket($botClassificationBucket)
    {
        $this->container['botClassificationBucket'] = $botClassificationBucket;
        return $this;
    }

    /**
    * Gets actionBucket
    *  actionBucket
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ActionDistributions|null
    */
    public function getActionBucket()
    {
        return $this->container['actionBucket'];
    }

    /**
    * Sets actionBucket
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ActionDistributions|null $actionBucket actionBucket
    *
    * @return $this
    */
    public function setActionBucket($actionBucket)
    {
        $this->container['actionBucket'] = $actionBucket;
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

