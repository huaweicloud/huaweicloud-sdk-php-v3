<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LandingZoneVersionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LandingZoneVersionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  Landing Zone版本。
    * releaseDate  Landing Zone版本发布时间。
    * releaseNotes  Landing Zone版本发布说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'releaseDate' => 'string',
            'releaseNotes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  Landing Zone版本。
    * releaseDate  Landing Zone版本发布时间。
    * releaseNotes  Landing Zone版本发布说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'releaseDate' => null,
        'releaseNotes' => null
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
    * version  Landing Zone版本。
    * releaseDate  Landing Zone版本发布时间。
    * releaseNotes  Landing Zone版本发布说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'releaseDate' => 'release_date',
            'releaseNotes' => 'release_notes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  Landing Zone版本。
    * releaseDate  Landing Zone版本发布时间。
    * releaseNotes  Landing Zone版本发布说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'releaseDate' => 'setReleaseDate',
            'releaseNotes' => 'setReleaseNotes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  Landing Zone版本。
    * releaseDate  Landing Zone版本发布时间。
    * releaseNotes  Landing Zone版本发布说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'releaseDate' => 'getReleaseDate',
            'releaseNotes' => 'getReleaseNotes'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
        $this->container['releaseNotes'] = isset($data['releaseNotes']) ? $data['releaseNotes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['releaseDate']) && (mb_strlen($this->container['releaseDate']) > 128)) {
                $invalidProperties[] = "invalid value for 'releaseDate', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['releaseDate']) && (mb_strlen($this->container['releaseDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'releaseDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['releaseNotes']) && (mb_strlen($this->container['releaseNotes']) > 1024)) {
                $invalidProperties[] = "invalid value for 'releaseNotes', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['releaseNotes']) && (mb_strlen($this->container['releaseNotes']) < 1)) {
                $invalidProperties[] = "invalid value for 'releaseNotes', the character length must be bigger than or equal to 1.";
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
    * Gets version
    *  Landing Zone版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version Landing Zone版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets releaseDate
    *  Landing Zone版本发布时间。
    *
    * @return string|null
    */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
    * Sets releaseDate
    *
    * @param string|null $releaseDate Landing Zone版本发布时间。
    *
    * @return $this
    */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;
        return $this;
    }

    /**
    * Gets releaseNotes
    *  Landing Zone版本发布说明。
    *
    * @return string|null
    */
    public function getReleaseNotes()
    {
        return $this->container['releaseNotes'];
    }

    /**
    * Sets releaseNotes
    *
    * @param string|null $releaseNotes Landing Zone版本发布说明。
    *
    * @return $this
    */
    public function setReleaseNotes($releaseNotes)
    {
        $this->container['releaseNotes'] = $releaseNotes;
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

