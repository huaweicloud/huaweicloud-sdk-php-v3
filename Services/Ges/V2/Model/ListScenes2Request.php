<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScenes2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScenes2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sceneName  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    * applicationName  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    * graphId  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sceneName' => 'string',
            'applicationName' => 'string',
            'graphId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sceneName  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    * applicationName  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    * graphId  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sceneName' => null,
        'applicationName' => null,
        'graphId' => null
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
    * sceneName  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    * applicationName  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    * graphId  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sceneName' => 'scene_name',
            'applicationName' => 'application_name',
            'graphId' => 'graph_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sceneName  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    * applicationName  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    * graphId  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @var string[]
    */
    protected static $setters = [
            'sceneName' => 'setSceneName',
            'applicationName' => 'setApplicationName',
            'graphId' => 'setGraphId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sceneName  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    * applicationName  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    * graphId  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @var string[]
    */
    protected static $getters = [
            'sceneName' => 'getSceneName',
            'applicationName' => 'getApplicationName',
            'graphId' => 'getGraphId'
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
        $this->container['sceneName'] = isset($data['sceneName']) ? $data['sceneName'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['graphId'] = isset($data['graphId']) ? $data['graphId'] : null;
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
    * Gets sceneName
    *  场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    *
    * @return string|null
    */
    public function getSceneName()
    {
        return $this->container['sceneName'];
    }

    /**
    * Sets sceneName
    *
    * @param string|null $sceneName 场景名称。 当有且只有scene_name有值时，返回对应scene_name下的所有application详情。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication
    *
    * @return $this
    */
    public function setSceneName($sceneName)
    {
        $this->container['sceneName'] = $sceneName;
        return $this;
    }

    /**
    * Gets applicationName
    *  应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
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
    * @param string|null $applicationName 应用程序名字。 当有且只有scene_name、application_name有值时，返回与application_name对应的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets graphId
    *  图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @return string|null
    */
    public function getGraphId()
    {
        return $this->container['graphId'];
    }

    /**
    * Sets graphId
    *
    * @param string|null $graphId 图ID。 当有且只有graph_id有值时，返回对应图id下所订阅的application详情。 当scene_name、application_name、graph_id均无值时,返回所有SceneApplication。
    *
    * @return $this
    */
    public function setGraphId($graphId)
    {
        $this->container['graphId'] = $graphId;
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

