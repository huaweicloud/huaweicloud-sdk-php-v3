<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLeagueRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLeagueRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * leagueId  联盟id，最大32位，字母和数字组成
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'leagueId' => 'string',
            'body' => '\HuaweiCloud\SDK\Tics\V1\Model\LeagueUpdateVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * leagueId  联盟id，最大32位，字母和数字组成
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'leagueId' => null,
        'body' => null
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
    * leagueId  联盟id，最大32位，字母和数字组成
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'leagueId' => 'league_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * leagueId  联盟id，最大32位，字母和数字组成
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'leagueId' => 'setLeagueId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * leagueId  联盟id，最大32位，字母和数字组成
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'leagueId' => 'getLeagueId',
            'body' => 'getBody'
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
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['leagueId'] === null) {
            $invalidProperties[] = "'leagueId' can't be null";
        }
            if ((mb_strlen($this->container['leagueId']) > 32)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['leagueId']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[\\w]{0,32}/", $this->container['leagueId'])) {
                $invalidProperties[] = "invalid value for 'leagueId', must be conform to the pattern /[\\w]{0,32}/.";
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
    * Gets leagueId
    *  联盟id，最大32位，字母和数字组成
    *
    * @return string
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string $leagueId 联盟id，最大32位，字母和数字组成
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\LeagueUpdateVo|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\LeagueUpdateVo|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

