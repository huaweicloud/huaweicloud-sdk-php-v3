<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioProcess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volume  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    * volumeExpr  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volume' => 'string',
            'volumeExpr' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volume  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    * volumeExpr  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volume' => null,
        'volumeExpr' => 'int32'
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
    * volume  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    * volumeExpr  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volume' => 'volume',
            'volumeExpr' => 'volume_expr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volume  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    * volumeExpr  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @var string[]
    */
    protected static $setters = [
            'volume' => 'setVolume',
            'volumeExpr' => 'setVolumeExpr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volume  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    * volumeExpr  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @var string[]
    */
    protected static $getters = [
            'volume' => 'getVolume',
            'volumeExpr' => 'getVolumeExpr'
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
    const VOLUME_AUTO = 'auto';
    const VOLUME_DYNAMIC = 'dynamic';
    const VOLUME_ORIGINAL = 'original';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeAllowableValues()
    {
        return [
            self::VOLUME_AUTO,
            self::VOLUME_DYNAMIC,
            self::VOLUME_ORIGINAL,
        ];
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
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['volumeExpr'] = isset($data['volumeExpr']) ? $data['volumeExpr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVolumeAllowableValues();
                if (!is_null($this->container['volume']) && !in_array($this->container['volume'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volume', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['volume']) && (mb_strlen($this->container['volume']) > 32)) {
                $invalidProperties[] = "invalid value for 'volume', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['volume']) && (mb_strlen($this->container['volume']) < 0)) {
                $invalidProperties[] = "invalid value for 'volume', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeExpr']) && ($this->container['volumeExpr'] > 15)) {
                $invalidProperties[] = "invalid value for 'volumeExpr', must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['volumeExpr']) && ($this->container['volumeExpr'] < -15)) {
                $invalidProperties[] = "invalid value for 'volumeExpr', must be bigger than or equal to -15.";
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
    * Gets volume
    *  音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    *
    * @return string|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param string|null $volume 音量调整方式： - auto：表示自动调整音量。 - dynamic：表示人为调整，需设定音量调整幅值。
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets volumeExpr
    *  音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @return int|null
    */
    public function getVolumeExpr()
    {
        return $this->container['volumeExpr'];
    }

    /**
    * Sets volumeExpr
    *
    * @param int|null $volumeExpr 音量调整幅值，需指定volume为dynamic。  取值范围：[-15,15]  单位：dB
    *
    * @return $this
    */
    public function setVolumeExpr($volumeExpr)
    {
        $this->container['volumeExpr'] = $volumeExpr;
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

