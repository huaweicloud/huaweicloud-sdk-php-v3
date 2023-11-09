<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobReportEnvVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobReportEnvVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggName  聚合器名称
    * leagueId  联盟id
    * leagueName  联盟名称
    * projectId  项目id
    * regionId  区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggName' => 'string',
            'leagueId' => 'string',
            'leagueName' => 'string',
            'projectId' => 'string',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggName  聚合器名称
    * leagueId  联盟id
    * leagueName  联盟名称
    * projectId  项目id
    * regionId  区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggName' => null,
        'leagueId' => null,
        'leagueName' => null,
        'projectId' => null,
        'regionId' => null
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
    * aggName  聚合器名称
    * leagueId  联盟id
    * leagueName  联盟名称
    * projectId  项目id
    * regionId  区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggName' => 'agg_name',
            'leagueId' => 'league_id',
            'leagueName' => 'league_name',
            'projectId' => 'project_id',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggName  聚合器名称
    * leagueId  联盟id
    * leagueName  联盟名称
    * projectId  项目id
    * regionId  区域
    *
    * @var string[]
    */
    protected static $setters = [
            'aggName' => 'setAggName',
            'leagueId' => 'setLeagueId',
            'leagueName' => 'setLeagueName',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggName  聚合器名称
    * leagueId  联盟id
    * leagueName  联盟名称
    * projectId  项目id
    * regionId  区域
    *
    * @var string[]
    */
    protected static $getters = [
            'aggName' => 'getAggName',
            'leagueId' => 'getLeagueId',
            'leagueName' => 'getLeagueName',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId'
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
        $this->container['aggName'] = isset($data['aggName']) ? $data['aggName'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['leagueName'] = isset($data['leagueName']) ? $data['leagueName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['aggName']) && (mb_strlen($this->container['aggName']) > 128)) {
                $invalidProperties[] = "invalid value for 'aggName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['aggName']) && (mb_strlen($this->container['aggName']) < 0)) {
                $invalidProperties[] = "invalid value for 'aggName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['leagueId']) && (mb_strlen($this->container['leagueId']) > 32)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['leagueId']) && (mb_strlen($this->container['leagueId']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['leagueName']) && (mb_strlen($this->container['leagueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'leagueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['leagueName']) && (mb_strlen($this->container['leagueName']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
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
    * Gets aggName
    *  聚合器名称
    *
    * @return string|null
    */
    public function getAggName()
    {
        return $this->container['aggName'];
    }

    /**
    * Sets aggName
    *
    * @param string|null $aggName 聚合器名称
    *
    * @return $this
    */
    public function setAggName($aggName)
    {
        $this->container['aggName'] = $aggName;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟id
    *
    * @return string|null
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string|null $leagueId 联盟id
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets leagueName
    *  联盟名称
    *
    * @return string|null
    */
    public function getLeagueName()
    {
        return $this->container['leagueName'];
    }

    /**
    * Sets leagueName
    *
    * @param string|null $leagueName 联盟名称
    *
    * @return $this
    */
    public function setLeagueName($leagueName)
    {
        $this->container['leagueName'] = $leagueName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  区域
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

