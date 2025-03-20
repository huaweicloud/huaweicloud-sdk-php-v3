<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSloDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSloDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SLO的ID
    * applicationName  应用名称
    * applicationId  应用ID
    * sloTargets  SLO的目标值
    * sliList  SLi列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'applicationName' => 'string',
            'applicationId' => 'string',
            'sloTargets' => 'double',
            'sliList' => '\HuaweiCloud\SDK\Coc\V1\Model\SliDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SLO的ID
    * applicationName  应用名称
    * applicationId  应用ID
    * sloTargets  SLO的目标值
    * sliList  SLi列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'applicationName' => null,
        'applicationId' => null,
        'sloTargets' => 'double',
        'sliList' => null
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
    * id  SLO的ID
    * applicationName  应用名称
    * applicationId  应用ID
    * sloTargets  SLO的目标值
    * sliList  SLi列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'applicationName' => 'application_name',
            'applicationId' => 'application_id',
            'sloTargets' => 'slo_targets',
            'sliList' => 'sli_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SLO的ID
    * applicationName  应用名称
    * applicationId  应用ID
    * sloTargets  SLO的目标值
    * sliList  SLi列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'applicationName' => 'setApplicationName',
            'applicationId' => 'setApplicationId',
            'sloTargets' => 'setSloTargets',
            'sliList' => 'setSliList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SLO的ID
    * applicationName  应用名称
    * applicationId  应用ID
    * sloTargets  SLO的目标值
    * sliList  SLi列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'applicationName' => 'getApplicationName',
            'applicationId' => 'getApplicationId',
            'sloTargets' => 'getSloTargets',
            'sliList' => 'getSliList'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['sloTargets'] = isset($data['sloTargets']) ? $data['sloTargets'] : null;
        $this->container['sliList'] = isset($data['sliList']) ? $data['sliList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) > 255)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sloTargets']) && ($this->container['sloTargets'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'sloTargets', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['sloTargets']) && ($this->container['sloTargets'] < 0)) {
                $invalidProperties[] = "invalid value for 'sloTargets', must be bigger than or equal to 0.";
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
    * Gets id
    *  SLO的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id SLO的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets applicationName
    *  应用名称
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName 应用名称
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用ID
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用ID
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets sloTargets
    *  SLO的目标值
    *
    * @return double|null
    */
    public function getSloTargets()
    {
        return $this->container['sloTargets'];
    }

    /**
    * Sets sloTargets
    *
    * @param double|null $sloTargets SLO的目标值
    *
    * @return $this
    */
    public function setSloTargets($sloTargets)
    {
        $this->container['sloTargets'] = $sloTargets;
        return $this;
    }

    /**
    * Gets sliList
    *  SLi列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SliDetail[]|null
    */
    public function getSliList()
    {
        return $this->container['sliList'];
    }

    /**
    * Sets sliList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SliDetail[]|null $sliList SLi列表
    *
    * @return $this
    */
    public function setSliList($sliList)
    {
        $this->container['sliList'] = $sliList;
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

